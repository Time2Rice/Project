<?php
    require_once('../DB/dbInfo.php');

    class Register_profiles {
        private $id = null;
        private $company = null;
        private $industry = null;
        private $city = null;
        
        public function __construct($company = null, $industry = null, $city = null, $id = null){
            $this->company = $company;
            $this->industry = $industry;
            $this->city = $city; 
        }

        public function addProfile (){
            try {
                $conn = DbInfo::connectDB();
                $sql = "INSERT INTO jobhive (company,industry,city)
                VALUES (:company,:industry,:city)";

                $stmt = $conn->prepare($sql);

                $stmt->execute([
                    ':company' => $this->company,
                    ':industry' => $this->industry,
                    ':city'=> $this->city
                ]);
        
                $conn = NULL;
        
            } catch (Exception  $e) {
                echo 'Message: ' .$e->getMessage();
            } 
        }

        public function deleteProfiles ($id) {
            try{
                $conn = DbInfo::connectDB();
                $sql = 'DELETE FROM jobhive WHERE id = :id';
                $stmt = $conn->prepare($sql);
                $stmt->execute([`:id`=>$id]);
                $conn = NULL;
            } catch (Exception  $e) {
                echo 'Message: ' .$e->getMessage();
            } 
        }

        public function updateProfiles (){
            try{
                $conn = DbInfo::connectDB();

                $sql = "UPDATE `jobhive`
                SET  `company` = :company,
                     `industry` = :industry,
                     `city` = :city
                WHERE `id` = :id";

                $stmt = $conn->prepare($sql);
                $stmt->execute([
                    ':id'=>$this->id,
                    ':company'=>$this->company,
                    ':industry'=>$this->industry,
                    ':city'=>$this->city
                ]);
                $conn = NULL;
                
            } catch (Exception  $e) {
                echo 'Message: ' .$e->getMessage();
            } 
        }

        public static function getAllProfiles(){
            try{
                $conn = DbInfo::connectDB();

                $sql = "SELECT * FROM jobhive";

                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $conn = NULL;
                return $profiles;

            } catch (Exception  $e) {
                echo 'Message: ' .$e->getMessage();
                return [];
            } 
        }
    }


    $industries = [
        "Công nghệ thông tin",
        "Kế toán / Kiểm toán",
        "Ngân hàng / Tài chính",
        "Nhân sự",
        "Marketing / Truyền thông",
        "Bán hàng / Kinh doanh",
        "Giáo dục / Đào tạo",
        "Sản xuất / Vận hành sản xuất",
        "Xây dựng / Kiến trúc",
        "Bất động sản",
        "Vận tải / Kho vận / Xuất nhập khẩu",
        "Y tế / Dược phẩm",
        "Luật / Pháp lý",
        "Thiết kế / Mỹ thuật",
        "Du lịch / Nhà hàng / Khách sạn",
        "Bảo hiểm",
        "Biên phiên dịch",
        "Thư ký / Trợ lý",
        "Chứng khoán / Đầu tư",
        "Hàng không / Hàng hải",
        "Nông nghiệp / Lâm nghiệp / Thủy sản",
        "Cơ khí / Điện / Điện tử",
        "Hóa học / Thực phẩm / Sinh học",
        "Thời trang / Trang sức / Mỹ phẩm",
        "Dịch vụ khách hàng / Call Center",
        "QA/QC / Kiểm định chất lượng",
        "Thương mại điện tử (E-Commerce)",
        "Game / Multimedia / Giải trí"
    ];

    $cities = [
        "Hà Nội", "TP. Hồ Chí Minh", "Hải Phòng", "Đà Nẵng", "Cần Thơ",
        "An Giang", "Bà Rịa - Vũng Tàu", "Bắc Giang", "Bắc Kạn", "Bạc Liêu",
        "Bắc Ninh", "Bến Tre", "Bình Dương", "Bình Định", "Bình Phước", "Bình Thuận",
        "Cà Mau", "Cao Bằng", "Đắk Lắk", "Đắk Nông", "Điện Biên", "Đồng Nai",
        "Đồng Tháp", "Gia Lai", "Hà Giang", "Hà Nam", "Hà Tĩnh", "Hải Dương",
        "Hậu Giang", "Hòa Bình", "Hưng Yên", "Khánh Hòa", "Kiên Giang", "Kon Tum",
        "Lai Châu", "Lâm Đồng", "Lạng Sơn", "Lào Cai", "Long An", "Nam Định",
        "Nghệ An", "Ninh Bình", "Ninh Thuận", "Phú Thọ", "Phú Yên", "Quảng Bình",
        "Quảng Nam", "Quảng Ngãi", "Quảng Ninh", "Quảng Trị", "Sóc Trăng", "Sơn La",
        "Tây Ninh", "Thái Bình", "Thái Nguyên", "Thanh Hóa", "Thừa Thiên Huế",
        "Tiền Giang", "Trà Vinh", "Tuyên Quang", "Vĩnh Long", "Vĩnh Phúc", "Yên Bái"
    ];

    if($_POST["submit"] !=null){
        echo "Hello";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../css/employer/employer.css">
    
</head>
<body>
    <div class="row">
        <div class="col-5 bg-color-blue d-flex flex-column align-items-center justify-content-between p-5">
            <h1 class="left-title">Welcome to our<br/>community</h1>
            <img src="../img/vnw_empower_growth_logo_white.png" alt="Jobhive Logo" class="img-fluid pb-5">
        </div>
        <div class="col-7 d-flex flex-column align-items-around  px-5">
            <div class="mt-5 ">
                <h1>Sign up!</h1>
                <p class="mt-3">Welcome to the candidate registration page – where you can start <br/>your career journey in just a few simple steps.</p>
            </div>
 
            
            <form action="" method="post" class="d-flex flex-column ">
                <div class="form-group">
                    <label for="company" class="mt-3 fw-bold">Company Name</label>
                    <input
                    type="text"
                    required
                    name="company"
                    class="form-control mt-3 p-3"
                    placeholder="Input Your Company"
                    >
                </div>

                <div class="form-group">
                    <label for="industry" class="mt-3 fw-bold">Company Industry</label>
                    <select class="form-select mt-3 p-3" name="industry">
                        <option>--Select Company Industry--</option>
                        <?php foreach ($industries as $industry): ?>
                        <option><?=$industry ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="city" class="mt-3 fw-bold">City</label>
                    <select class="form-select mt-3 p-3" name="city">
                        <option>--Select City --</option>
                        <?php foreach ($cities as $city): ?>
                        <option value=<?= $city ?>><?=$city ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <div class="mt-3 row gx-2">
               <div class="col">
                    <button class="btn btn-secondary w-100 p-3 fw-bold" type="button">Cancel</button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100 p-3 fw-bold" type="submit" name="submit">Next</button>
                </div>
                </div>
                <p class="mt-5 text-md-center">Already have an account? Sign in here</p>

            </form>
            
        </div>
    </div>
</body>
</html>