
<?php include 'load.php'; ?>

<?php

function removeLineStartingWith($filename, $startString) { 
    
    try {
        $file = fopen($filename, 'r+');
        $tempFile = tmpfile();
        while (($line = fgets($file)) !== false) {
            // Check if the line starts with the provided string
            if (strpos($line, $startString) === 0) {
                // Skip the line by not writing it to the temporary file
                continue;
            }
            
            fwrite($tempFile, $line);
        }
        
        fclose($file);
        rewind($tempFile);
        $file = fopen($filename, 'w');
        while (($line = fgets($tempFile)) !== false) {
            fwrite($file, $line);
        }
        
        fclose($tempFile);
        return true;
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage());
        return false;
    }
}

removeLineStartingWith($_GET['en'], $_GET['cual']);
print '<meta http-equiv="refresh" content="1;url=index.php">';

?>