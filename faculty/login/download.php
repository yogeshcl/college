<?php
 include("./db.php");

$drop="drop table Allfaculty";
$createallfaculty="CREATE TABLE Allfaculty select pr.pfno as 'PFNO',pr.name as Name,pr.designation as Designation,pr.doj as 'Date Of Join',pr.dob as 'Date Of Birth',pr.fathername as 'Father Name',pr.sex as Gender,pr.nationality as Nationality,pr.contactno as 'Contact No', pr.emailid as 'Email Id', pr.caddress as 'Correspondence address',pr.paddress as 'Permanent Address',pr.eduquali as 'Education Qualification',pr.experience as Experience,pr.professionalbodies as 'Professional Bodies',pr.hobbies as Hobbies, q8.books as Books,q8.journals as Journals,q8.publications as Publications,q8.responsibility as Responsibilities,q8.research as Research,q8.Consultancy as Consultancy ,q8.FundedResearch as 'Funded Research',q8.Achievements as Achievements from profile as pr, (SELECT q7.pfno, q7.books,q7.journals,q7.publications,q7.responsibility,q7.research,q7.Consultancy,q7.FundedResearch, GROUP_CONCAT(DISTINCT achievements.achievements  SEPARATOR '; ') Achievements from achievements right join (SELECT q6.pfno, q6.books,q6.journals,q6.publications,q6.responsibility,q6.research,q6.Consultancy,GROUP_CONCAT(DISTINCT fundedresearch.Fundedresearch  SEPARATOR '; ') FundedResearch from fundedresearch right join(SELECT q5.pfno,q5.books,q5.journals,q5.publications,q5.responsibility,q5.research,  GROUP_CONCAT(DISTINCT consultancy.consultancy  SEPARATOR '; ') Consultancy from consultancy right join (SELECT q4.pfno,q4.books,q4.journals,q4.publications,q4.responsibility, GROUP_CONCAT(DISTINCT research.description  SEPARATOR '; ') research from research right join(SELECT q3.pfno,q3.books,q3.journals,q3.publications, GROUP_CONCAT(DISTINCT responsibilites.responsibility  SEPARATOR '; ') responsibility from responsibilites right join(SELECT q2.pfno,q2.books,q2.journals, GROUP_CONCAT(DISTINCT publications.pubdetails SEPARATOR '; ') publications from publications right join (SELECT q1.pfno, GROUP_CONCAT(DISTINCT books.details SEPARATOR '; ') books, q1.journals  FROM books RIGHT JOIN (SELECT p.pfno, GROUP_CONCAT(DISTINCT j.journaldetails SEPARATOR '; ') journals FROM profile as p LEFT JOIN journals as j ON p.pfno=j.pfno GROUP BY pfno)as q1 ON q1.pfno=books.pfno GROUP BY q1.pfno) as q2 On q2.pfno=publications.pfno group by q2.pfno) as q3 on q3.pfno=responsibilites.pfno group by q3.pfno)as q4 on q4.pfno=research.pfno group by q4.pfno)as q5 on q5.pfno=consultancy.pfno group by q5.pfno)as q6 on q6.pfno=fundedresearch.pfno group by q6.pfno)as q7 on q7.pfno=achievements.pfno group by q7.pfno)as q8 where q8.pfno=pr.pfno";




$result2=mysqli_query($conn,$drop);
$result3=mysqli_query($conn,$createallfaculty);


$filename = "allfaculty.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = mysqli_query($conn,'select * from Allfaculty');
// Write data to file
$flag = false;
while ($row = mysqli_fetch_assoc($user_query)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}

?>

