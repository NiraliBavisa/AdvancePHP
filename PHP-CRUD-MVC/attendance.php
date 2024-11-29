case "attendance-add":
    if (isset($_POST['add'])) {
        $attendance = new Attendance();
        
        $attendance_timestamp = strtotime($_POST["attendance_date"]);
        $attendance_date = date("Y-m-d", $attendance_timestamp);
        
        if(!empty($_POST["student_id"])) {
            $attendance->deleteAttendanceByDate($attendance_date);
            foreach($_POST["student_id"] as $k=> $student_id) {
                $present = 0;
                $absent = 0;
                
                if($_POST["attendance-$student_id"] == "present") {
                    $present = 1;
                }
                else if($_POST["attendance-$student_id"] == "absent") {
                    $absent = 1;
                }
                
                $attendance->addAttendance($attendance_date, $student_id, $present, $absent);
            }
        }
        header("Location: index.php?action=attendance");
    }
    $student = new Student();
    $studentResult = $student->getAllStudent();
    require_once "web/attendance-add.php";
    break;

case "attendance-edit":
    $attendance_date = $_GET["date"];
    $attendance = new Attendance();
    if (isset($_POST['add'])) {
        $attendance->deleteAttendanceByDate($attendance_date);
        if(!empty($_POST["student_id"])) {
            foreach($_POST["student_id"] as $k=> $student_id) {
                $present = 0;
                $absent = 0;
                
                if($_POST["attendance-$student_id"] == "present") {
                    $present = 1;
                }
                else if($_POST["attendance-$student_id"] == "absent") {
                    $absent = 1;
                }
                
                $attendance->addAttendance($attendance_date, $student_id, $present, $absent);
            }
        }
        header("Location: index.php?action=attendance");
    }
    
    $result = $attendance->getAttendanceByDate($attendance_date);
    
    $student = new Student();
    $studentResult = $student->getAllStudent();
    require_once "web/attendance-edit.php";
    break;

case "attendance-delete":
    $attendance_date = $_GET["date"];
    $attendance = new Attendance();
    $attendance->deleteAttendanceByDate($attendance_date);
    
    $result = $attendance->getAttendance();
    require_once "web/attendance.php";
    break;

case "attendance":
    $attendance = new Attendance();
    $result = $attendance->getAttendance();
    require_once "web/attendance.php";
    break;
