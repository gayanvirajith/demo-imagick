<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

define('IMAGE_MAGICK_WINDOWS_PATH', 'c:\tools\imagemagick.exe ');
define('IMAGE_MAGICK_LINUX_PATH', '/usr/lib/x86_64-linux-gnu/ImageMagick-6.8.9/bin-Q16/');

$imageMagick = ImageMagickFactory::make();

$commands = [
    new ShellCommand($imageMagick->getExecutablePath() . "convert -limit memory 0 -limit map 0 -quiet ./profile.jpeg -thumbnail @11000 -quality 50 ./profile-1.jpeg"),
    new ShellCommand($imageMagick->getExecutablePath() . "convert -limit memory 0 -limit map 0 -quiet ./profile.jpeg -thumbnail @11000 -quality 50 ./profile-2.jpeg"),
    new ShellCommand($imageMagick->getExecutablePath() . "convert -limit memory 0 -limit map 0 -quiet ./profile.jpeg -thumbnail @11000 -quality 50 ./profile-3.jpeg"),
    new ShellCommand($imageMagick->getExecutablePath() . "convert -limit memory 0 -limit map 0 -quiet ./profile.jpeg -thumbnail @11000 -quality 50 ./profile-4.jpeg"),
    new ShellCommand($imageMagick->getExecutablePath() . "convert -limit memory 0 -limit map 0 -quiet ./profile.jpeg -thumbnail @11000 -quality 50 ./profile-5.jpeg"),
];
try {
    foreach ($commands as $command) {
        $command->execute();
    }
}catch (CommandException $ex) {
    echo "Unable to execute command : " . $ex->getMessage();
}
