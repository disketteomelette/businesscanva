<?php
function process($filename) { 
    try {
        // Open the CSV file
        $file = fopen($filename, 'r');
        if (!$file) {
            throw new Exception("Failed to open the CSV file");
        } 
        $bootstrapIcon = ''; 
        while (($line = fgetcsv($file, 0, ';')) !== false) {
            // Extract the first and second data before the ";"
            $firstData = $line[0];
            $secondData = $line[1]; 
            $bootstrapIcon .= '<button type="button" onclick="proceval(\'' . $filename . '/' . $firstData . '\');" class="btn ' . $secondData . ' btn-block w-100 text-light">' . $firstData . '</button> ';

        } 
        fclose($file); 
        return $bootstrapIcon;
    } catch (Exception $e) {
        // Log the error
        error_log('Error: ' . $e->getMessage());

        // Return an empty string
        return '';
    }
}

function printFileContent($filePath) { 
    try { 
        if (!file_exists($filePath)) {
            throw new Exception("File does not exist");
        }
        
        // Read the file content
        $content = file_get_contents($filePath); 
        echo $content;
    } catch (Exception $e) {
        // Log the error
        error_log("Error: " . $e->getMessage());
    }
}

?>