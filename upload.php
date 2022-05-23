<?php
// include mysql database configuration file
include_once 'db.php';

if (isset($_POST['submit']))
{

    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );

    // Validate whether selected file is a CSV file
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
    {

            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            // Skip the first line
            fgetcsv($csvFile);

            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            {
                // Get row data
                $Country=$getData[0];
                $Othernames=$getData[1];
                $ISO =$getData[2];
                $Population=$getData[3];	
                $Continent=$getData[4];	
                $TotalCases=$getData[5];	
                $TotalDeaths=$getData[6];	
                $TotÂ Cases1M=$getData[7]; 
                $pop=$getData[8];	 	
                $Deathpercentage=$getData[9];

                // If user already exists in the database with the same email
                echo "uploading file";
                
                mysqli_query($conn,"INSERT INTO dataset (Country, Othernames,ISO,Population,Continent,TotalCases,TotalDeaths,TotÂ Cases1M,pop,Deathpercentage) VALUES ('" .$Country. "', '" . $Othernames. "', '" .$ISO. "', '" .$Population. "', '" .$Continent. "', '" .$TotalCases. "', '" .$TotalDeaths. "', '" .$TotÂ Cases1M. "', '" .$pop. "', '" .$Deathpercentage. "')");
            }

        }

        // Close opened CSV file
        fclose($csvFile);

        header("Location: index.php");
     
}
else
{
    echo "Please select valid file";
}


                
                
                
                
    














//  