<?php
  
namespace App\Console\Commands;
  
use Illuminate\Console\Command;
use File;
  
class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';
  
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new blade file in our application.';
  
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $view = $this->argument('view');
  
        $path = $this->viewPath($view);
  
        $this->createDir($path);
  
        //Check if the file exists before trying to create a new file
        if (File::exists($path))
        {
            $this->error("File {$path} already exists!");
            return;
        }
  
        //Create a new blate file
        File::put($path, $path);
  
        $this->info("File {$path} created.");
    }
  
     /**
     * Get the view full path.
     *
     * @param string $view
     *
     * @return string
     */
    public function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';
  
        $path = "resources/views/{$view}";
  
        return $path;
    }
  
    /**
     * Create view directory if not exists.
     *
     * @param $path
     */
    public function createDir($path)
    {
        $dir = dirname($path);
  
        if (!file_exists($dir))
        {
            //create directory in the views folder and give it permissions
            mkdir($dir, 0777, true);
        }
    }
}