<?php 
require '../../config/ConnectionProvider.php';

$countTechTalkRecords=0;
$Query = "SELECT Id FROM tblDs17TechTalksRegistrations";
$stmt = $conn->prepare($Query);
$stmt->execute();
$countTechTalkRecords= $stmt->rowCount();

$countMeanHackRecords=0;
$Query = "SELECT Id FROM tblDs17MeanhackRegistrations";
$stmt = $conn->prepare($Query);
$stmt->execute();
$countMeanHackRecords= $stmt->rowCount();

$countHungamaRecords=0;
$Query = "SELECT Id FROM tblDs17CulturalRegistrations";
$stmt = $conn->prepare($Query);
$stmt->execute();
$countHungamaRecords= $stmt->rowCount();

$countJobFairRecords=0;
$Query = "SELECT Id FROM tblDs17JobRegistrations";
$stmt = $conn->prepare($Query);
$stmt->execute();
$countJobFairRecords= $stmt->rowCount();



?>


<div class="main-content-area">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Registrants</span>
                            <h4><?php echo $countTechTalkRecords; ?></h4>
                            <i class="fa fa-microphone red-bg"></i>
                            <h5>Tech Talks</h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Registrants</span>
                            <h4><?php echo $countHungamaRecords; ?></h4>
                            <i class="fa fa-music skyblue-bg"></i>
                            <h5>Culturals</h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Registrants</span>
                            <h4><?php echo $countMeanHackRecords; ?></h4>
                            <i class="fa fa-laptop green-bg"></i>
                            <h5>Citizen hack</h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span>Registrants</span>
                            <h4 class="number"><?php echo $countJobFairRecords; ?></h4>
                            <i class="fa fa-users blue-bg"></i>
                            <h5>Job Fair</h5>
                        </div>
                    </div><!-- Widget -->
                </div>
            </div>
        </div>