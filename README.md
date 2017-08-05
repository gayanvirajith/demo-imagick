# ImageMagic Helper

Example code snipped to convert images using image-magick library.

## Running the code

This code has a runner file that can be used to run the image-magic 
convert process. 

Prior to running the script, you'll need to configure your image-magic
installed path based on your OS. There are two constants defined in
`runner.php`. You may need to change the file path of image-magic 
installation. Example:

```php
define('IMAGE_MAGICK_WINDOWS_PATH', 'c:\tools\imagemagick.exe ');
define('IMAGE_MAGICK_LINUX_PATH', '/usr/lib/x86_64-linux-gnu/ImageMagick-6.8.9/bin-Q16/');
```
You can run the script as follows

`php runner.php`

### Assumptions
- User/Client code may specify the convert command without image-magic 
installation path.
- If the convert command is used for batch processing
you may need consider line number `45` in `ShellCommand.php`. 
