<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>body {background-color:blue;
        color: white;}</style>
           <?php
            /*
            ----Write to File - fwrite()----
            The fopen function is used to create file same like file open.
            if you use fopen() on a file doesn't exists it will create it given the file is opened for writing (w) or appending (a).
            */
            $myfile = fopen("newfile.txt","w") or die ("unable to open the file you currently called you can try again latter algater :)");
            $txt = "Hello Ahmed Khalid Welcome Back Sir\n";
            fwrite($myfile,$txt);
            $myfile = fopen("newfile.txt","r") or die ("unable to open the file you currently called you can try again latter algater :)");
            echo fread($myfile,filesize("newfile.txt"));
            fclose($myfile);
            /*
            ----Overwriting----
            when we open an existing file for writing.
            all the existing data will be erased and we start with an empty file.
            */
            $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
            $txt = "Mickey Mouse\n";
            fwrite($myfile, $txt);
            $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
            fread($myfile,filesize("newfile.txt"));
            fclose($myfile);
            /*
            ----Append Text----
            youo can append data to a file by useing the "a" mode.
            the "a" mode append to the end of the file,while the "w" mode overrides (and erases)
            the old content of the file.
            
            */
            $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
            $txt = "Donald Duck\n";
            fwrite($myfile, $txt);
            $txt = "Goofy Goof\n";
            fwrite($myfile, $txt);
            fclose($myfile);
           ?>
    </body>
</html>