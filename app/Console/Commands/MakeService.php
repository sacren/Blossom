<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class MakeService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service
        {name : The name of the service class}
        {--i|interface= : The interface this service implements}
        {--m|method= : Add a default method to the service}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class in the Services directory';

    /**
     * File system handler
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     *
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get the service name and normalize it
        $name = $this->argument('name');
        $name = Str::endsWith($name, 'Service') ? $name : $name . 'Service';

        // Determine the full path for the service
        $path = $this->getPath($name);

        // Ensure the directory exists
        $this->makeDirectory($path);

        // Get optional interface
        $interface = $this->option('interface');

        // Get optional method
        $method = $this->option('method');

        // Generate the service class content
        $content = $this->buildClass($name, $interface, $method);

        // Write the file
        $this->files->put($path, $content);

        // Provide feedback
        $this->info("Service class {$name} created successfully.");

        return Command::SUCCESS;
    }

    /**
     * Get the full path for the service file
     *
     * @param string $name
     * @return string
     */
    protected function getPath($name)
    {
        return app_path("Services/{$name}.php");
    }

    /**
     * Create the directory if it doesn't exist
     *
     * @param string $path
     * @return void
     */
    protected function makeDirectory($path)
    {
        $directory = dirname($path);
        if (!$this->files->isDirectory($directory)) {
            $this->files->makeDirectory($directory, 0755, true, true);
        }
    }

    /**
     * Build the class content
     *
     * @param string $name
     * @param string|null $interface
     * @param string|null $method
     * @return string
     */
    protected function buildClass($name, $interface = null, $method = null)
    {
        // Prepare implements and use statements
        $implements = $interface ? " implements \\App\\Contracts\\{$interface}" : '';
        $useInterface = $interface ? "\nuse App\\Contracts\\{$interface};" : '';

        // Prepare method content
        $methodContent = $method ? $this->generateMethod($method) : '';

        // Build the full class template
        return <<<EOT
<?php

namespace App\Services;{$useInterface}

class {$name}{$implements}
{
    /**
     * Create a new {$name} instance.
     */
    public function __construct()
    {
        //
    }

    {$methodContent}
}

EOT;
    }

    /**
     * Generate a method content
     *
     * @param string $methodName
     * @return string
     */
    protected function generateMethod($methodName)
    {
        return <<<EOT

    /**
     * {$methodName} method description
     *
     * @return void
     */
    public function {$methodName}()
    {
        // TODO: Implement {$methodName} method
    }

EOT;
    }
}
