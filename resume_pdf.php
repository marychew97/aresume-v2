<?php
require('fpdf181/fpdf.php');
require('config/db.php');

$resume_id = $_GET['id'];
$user_id = $_GET['user_id'];

$sql = "SELECT * FROM template_temp AS tt 
JOIN profile_temp AS pt ON tt.resume_id = pt.resume_id AND tt.user_id = pt.user_id
JOIN institution_temp AS it ON tt.resume_id = it.resume_id AND tt.user_id = it.user_id
JOIN work_temp AS wt ON tt.resume_id = wt.resume_id AND tt.user_id = wt.user_id
JOIN award_temp AS awt ON tt.resume_id = awt.resume_id AND tt.user_id = awt.user_id
JOIN activities_temp AS act ON tt.resume_id = act.resume_id AND tt.user_id = act.user_id";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
$template = $row['template'];

$profile_image = $row['profile_image'];
$name = $row['name'];
$job = $row['job'];
$email = $row['email'];
$phone = $row['phone'];
$location = $row['location'];
$summary = $row['summary'];
$website = preg_replace('#(^https?:\/\/(w{3}\.)?)|(\/$)#', '', $row['website']);
$linkedin = preg_replace('#(^https?:\/\/(w{3}\.)?)|(\/$)#', '', $row['linkedin']);
$github = preg_replace('#(^https?:\/\/(w{3}\.)?)|(\/$)#', '', $row['github']);
$facebook = preg_replace('#(^https?:\/\/(w{3}\.)?)|(\/$)#', '', $row['facebook']);
$video = $row['video'];

$institution = $row['institution'];
$studyarea = $row['studyarea'];
$edulevel = $row['edulevel'];
$country = $row['country'];
$city = $row['city'];
$startdate = $row['startdate'];
$enddate = $row['enddate'];
$gpa = $row['cgpa'];

$company = $row['company'];
$position = $row['position'];
$work_country = $row['work_country'];
$work_city = $row['work_city'];
$work_startdate = $row['work_startdate'];
$work_enddate = $row['work_enddate'];

$activity_name = $row['activity_name'];
$activity_country = $row['activity_country'];
$activity_city = $row['activity_city'];
$activity_startdate = $row['activity_startdate'];
$activity_enddate = $row['activity_enddate'];
$activity_desc = $row['activity_desc'];

$award = $row['award'];
$awarder = $row['awarder'];
$award_date = $row['date'];
$award_desc = $row['award_desc'];

$query_string = urlencode("https://aresume-procom.000webhostapp.com/scanner-test-2.php?user_id=".$user_id."&resume_id=".$resume_id);

// Instanciation of inherited class
$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('images/'.$template,0,0,220);
if(!empty($profile_image)){
    $pdf->Image('uploads/images/'.$profile_image,20,10,35);
}
$pdf->SetFont('Arial','',16);
$pdf->SetTextColor(255,255,255);
if(!empty($name)){
    $pdf->SetXY(35,65);
    $pdf->Cell(10,0,$name,0,1,'C');
}
if(!empty($job)){
    $pdf->SetXY(35,75);
    $pdf->Cell(10,0,$job,0,1,'C');
}
if(!empty($video)){
    $pdf->Image('ar-marker/pattern-profile_marker.png',30,85,20);
}
$pdf->SetFont('Arial','',12);
$pdf->SetY(115);
if(!empty($location)){
    $pdf->Cell(20,0,$location,0,1,'L');
    $pdf->Ln(10);
}
if(!empty($phone)){
    $pdf->Cell(20,0,$phone,0,1,'L');
    $pdf->Ln(10);
}
if(!empty($email)){
    $pdf->Cell(20,0,$email,0,1,'L');
    $pdf->Ln(10);
}
if(!empty($linkedin)){
    $pdf->Cell(20,0,$linkedin,0,1,'L');
    $pdf->Ln(10);
}
if(!empty($github)){
    $pdf->Cell(20,0,$github,0,1,'L');
    $pdf->Ln(10);
}
$pdf->SetY(250);
$pdf->Cell(60,0,"Scan here for AR experience",0,1,'C');
$pdf->Image('images/qr_code.png',20,255,30,0,'', "https://aresume-procom.000webhostapp.com/scanner-test-2.php?user_id=".$user_id."&resume_id=".$resume_id);

if(!empty($summary)){
    $pdf->SetXY(130,10);
    $title="Career Objective";
    $pdf->SetFont('Arial','',18);
    $w = $pdf->GetStringWidth($title)+50;
    $pdf->SetX((230-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(66,74,85);
    $pdf->SetFillColor(66,74,85);
    $pdf->SetTextColor(255,255,255);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(2);
    // Title
    $pdf->Cell($w,9,$title,1,1,'C',true);
    // Line break
    $pdf->Ln(10);
    $pdf->SetXY(90,25);
    $pdf->SetFont('Arial','',12);
    $pdf->SetFillColor(225,207,123);
    $pdf->SetDrawColor(225,207,123);
    $pdf->SetTextColor(66,74,85);
    $pdf->MultiCell(110,7,$summary,1,1,'L', false);
}

if(!empty($institution)){
    $pdf->SetXY(130,50);
    $title="Education";
    $pdf->SetFont('Arial','',18);
    $w = $pdf->GetStringWidth($title)+50;
    $pdf->SetX((230-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(66,74,85);
    $pdf->SetFillColor(66,74,85);
    $pdf->SetTextColor(255,255,255);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(4);
    // Title
    $pdf->Cell($w,9,$title,1,1,'C',true);
    $pdf->Image('ar-marker/pattern-edu_marker.png',135,50,10);
    // Line break
    $pdf->Ln(10);
    $pdf->SetXY(90,65);
    $pdf->SetFont('Arial','',12);
    $pdf->SetFillColor(225,207,123);
    $pdf->SetTextColor(66,74,85);
    $pdf->MultiCell(110,7,$institution,0,1,'L');
    $pdf->SetLeftMargin(90);
    $pdf->SetFont('Arial','I',11);
    $pdf->Ln(1);
    $pdf->Cell(110,7,$studyarea."(".$edulevel.")",0,1,'L');
    $pdf->Ln(1);
    $pdf->Cell(110,7,$city.", ".$country,0,1,'L');
    $pdf->Ln(1);
    $pdf->Cell(110,7,$startdate." - ".$enddate,0,1,'L');
    $pdf->Ln(1);
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(110,7,"CGPA: ".$gpa,0,1,'L');
}

if(!empty($company)){
    $pdf->SetXY(130,120);
    $title="Work History";
    $pdf->SetFont('Arial','',18);
    $w = $pdf->GetStringWidth($title)+50;
    $pdf->SetX((230-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(66,74,85);
    $pdf->SetFillColor(66,74,85);
    $pdf->SetTextColor(255,255,255);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(2);
    // Title
    $pdf->Cell($w,9,$title,1,1,'C',true);
    // Line break
    $pdf->Ln(10);
    $pdf->SetXY(90,135);
    $pdf->SetFont('Arial','',12);
    $pdf->SetFillColor(225,207,123);
    $pdf->SetTextColor(66,74,85);
    $pdf->MultiCell(110,7,$position,0,1,'L');
    $pdf->SetLeftMargin(90);
    $pdf->SetFont('Arial','I',11);
    $pdf->Ln(1);
    $pdf->Cell(110,7,$company,0,1,'L');
    $pdf->Ln(1);
    $pdf->Cell(110,7,$work_city.", ".$work_country,0,1,'L');
    $pdf->Ln(1);
    $pdf->Cell(110,7,$work_startdate." - ".$work_enddate,0,1,'L');
}

if(!empty($activity_name)){
    $pdf->SetXY(130,175);
    $title="Activities";
    $pdf->SetFont('Arial','',18);
    $w = $pdf->GetStringWidth($title)+50;
    $pdf->SetX((230-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(66,74,85);
    $pdf->SetFillColor(66,74,85);
    $pdf->SetTextColor(255,255,255);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(4);
    // Title
    $pdf->Cell($w,9,$title,1,1,'C',true);
    $pdf->Image('images/barcode5.png',135,175,10);
    // Line break
    $pdf->Ln(10);
    $pdf->SetXY(90,190);
    $pdf->SetFont('Arial','',12);
    $pdf->SetFillColor(225,207,123);
    $pdf->SetTextColor(66,74,85);
    $pdf->MultiCell(110,7,$activity_name,0,1,'L');
    $pdf->SetLeftMargin(90);
    $pdf->SetFont('Arial','I',11);
    $pdf->Ln(1);
    $pdf->Cell(110,7,$activity_city.", ".$activity_country,0,1,'L');
    $pdf->Ln(1);
    $pdf->Cell(110,7,$activity_startdate." - ".$activity_enddate,0,1,'L');
    $pdf->Ln(1);
    $pdf->MultiCell(110,7,$activity_desc,0,1,'L');
}

if(!empty($award)){
    $pdf->SetXY(130,240);
    $title="Awards";
    $pdf->SetFont('Arial','',18);
    $w = $pdf->GetStringWidth($title)+50;
    $pdf->SetX((230-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(66,74,85);
    $pdf->SetFillColor(66,74,85);
    $pdf->SetTextColor(255,255,255);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(4);
    // Title
    $pdf->Cell($w,9,$title,1,1,'C',true);
    $pdf->Image('ar-marker/kanji.png',135,240,10);
    // Line break
    $pdf->Ln(10);
    $pdf->SetXY(90,253);
    $pdf->SetFont('Arial','',12);
    $pdf->SetFillColor(225,207,123);
    $pdf->SetTextColor(66,74,85);
    $pdf->MultiCell(110,7,$award.', '.$awarder,0,1,'L');
    $pdf->SetLeftMargin(90);
    $pdf->SetFont('Arial','I',11);
    $pdf->Ln(1);
    $pdf->Cell(110,7,$award_date,0,1,'L');
    $pdf->Ln(1);
    $pdf->MultiCell(110,7,$award_desc,0,1,'L');
}

$pdf->Output();

}


?>