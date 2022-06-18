<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <style>body {background-color:blue;
        color: white;}</style>
            <?php
            /*
            ----Open File-fopen()----
            a better methoud to open file with the fopen() function. this function gives you more option than
            the readfile() function.
            */
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("webdictionary.txt"));
            fclose($myfile);
            /*
            ----Read File-fread()----
            the fread function reads from an open file.
            the first parameter of fread contains the name of the file to read from and the secound pararmeter
            specifies the maximum number of bytes to read 
            ----syntax----
            fread($myfile,filesize("webdictionary.txt"));
            */
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("webdictionary.txt"));//the fread function reads from an open file.
            fclose($myfile);
            /*
            ----Close File-fclose()----
            the fclose() function is used to close the open file
            the fclose() function requires the name of the file we need to close it or the varibale that holds the name of the file
            */
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("webdictionary.txt"));
            fclose($myfile); //the fclose() function is used to close the open file
            /*
            ----Read Single Line-fgets()----
            The fgets() function is used to raed the single line from the file.
            */
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            echo fgets($myfile);
            fclose($myfile);
            /*
            ----Check End-Of-File - feof()----
            The feof() function checks if the (eof)-End-Of-File has been reached.
            the feof() function is useful for looping through data of unknown lenght.
            */
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            // Output one line until end-of-file
            while(!feof($myfile)) {
            echo fgets($myfile) . "<br>";
            }
            fclose($myfile);
            /*
            ----Read Single Character - fgetc()----
            The fgetc() function is used to read a single character from a file.
            */
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            // Output one character until end-of-file
            while(!feof($myfile)) {
            echo fgetc($myfile) . "<br>";
            }
            
            ?>
    </body>
</html>