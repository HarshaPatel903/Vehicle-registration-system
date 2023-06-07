<?php 

class crud{
	private $db;
	function __construct($conn){
		$this->db = $conn;
	}
	
	public function insert($id,$fname,$lname,$email,$number,$comment){
		try{
			$sql = "INSERT INTO attendee(id,fname,lname,email,number,comment)VALUES(:id,:fname,:lname,:email,:number,:comment)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':id' ,$id);
			$stmt->bindparam(':fname' ,$fname);
			$stmt->bindparam(':lname' ,$lname);
			$stmt->bindparam(':email' ,$email);
			$stmt->bindparam(':number' ,$number);
			$stmt->bindparam(':comment' ,$comment);
			$stmt->execute();
			return true;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	public function insertCustomer($cus_id,$cus_name,$cus_addres,$cus_email,$cus_mobile,$cus_dob){
		try{
			$sql = "INSERT INTO customer(cus_id,cus_name,cus_addres,cus_email,cus_mobile,cus_dob)VALUES(:cus_id,:cus_name,:cus_addres,:cus_email,:cus_mobile,:cus_dob)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':cus_id' ,$cus_id);
			$stmt->bindparam(':cus_name' ,$cus_name);
			$stmt->bindparam(':cus_addres' ,$cus_addres);
			$stmt->bindparam(':cus_email' ,$cus_email);
			$stmt->bindparam(':cus_mobile' ,$cus_mobile);
			$stmt->bindparam(':cus_dob' ,$cus_dob);
			$stmt->execute();
			return true;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	public function insertvehicle($veh_id,$veh_num,$veh_type,$chechis,$engine_no,$veh_desc,$cus_id){
		try{
			$sql = "INSERT INTO vehicle(veh_id,veh_num,veh_type,chechis,engine_no,veh_desc,cus_id)VALUES(:veh_id,:veh_num,:veh_type,:chechis,:engine_no,:veh_desc,:cus_id)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':veh_id' ,$veh_id);
			$stmt->bindparam(':veh_num' ,$veh_num);
			$stmt->bindparam(':veh_type' ,$veh_type);
			$stmt->bindparam(':chechis' ,$chechis);
			$stmt->bindparam(':engine_no' ,$engine_no);
			$stmt->bindparam(':veh_desc' ,$veh_desc);
			$stmt->bindparam(':cus_id' ,$cus_id);
			$stmt->execute();
			return true;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	public function insertdriverlicense($dl_id,$dl_no,$license_type,$issue_date,$exp_date,$issue_city,$cus_id){
		try{
			$sql = "INSERT INTO driver_license(dl_id,dl_no,license_type,issue_date,exp_date,issue_city,cus_id)VALUES(:dl_id,:dl_no,:license_type,:issue_date,:exp_date,:issue_city,:cus_id)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':dl_id' ,$dl_id);
			$stmt->bindparam(':dl_no' ,$dl_no);
			$stmt->bindparam(':license_type' ,$license_type);
			$stmt->bindparam(':issue_date' ,$issue_date);
			$stmt->bindparam(':exp_date' ,$exp_date);
			$stmt->bindparam(':issue_city' ,$issue_city);
			$stmt->bindparam(':cus_id' ,$cus_id);
			$stmt->execute();
			return true;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	public function insertbooking($booking_id,$reg_fee,$temp_no,$cus_id){
		try{
			$sql = "INSERT INTO booking(booking_id,reg_fee,temp_no,cus_id)VALUES(:booking_id,:reg_fee,:temp_no,:cus_id)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindparam(':booking_id' ,$booking_id);
			$stmt->bindparam(':reg_fee' ,$reg_fee);
			$stmt->bindparam(':temp_no' ,$temp_no);
			$stmt->bindparam(':cus_id' ,$cus_id);
			$stmt->execute();
			return true;
		}catch(PDOException $e){
			echo $e->getmessage();
			return false;
		}
	}
	public function getcustomer(){
        try{
            $sql = "SELECT * FROM `customer`";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
           
    }
	public function editcustomer($cus_id,$cus_name,$cus_addres,$cus_email,$cus_mobile,$cus_dob){
        try{ 
            $sql = "UPDATE `customer` SET `cus_id`=:cus_id,`cus_name`=:cus_name,`cus_addres`=:cus_addres,`cus_email`=:cus_email,`cus_mobile`=:cus_mobile,`cus_dob`=:cus_dob WHERE cus_id = :cus_id ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':cus_id' ,$cus_id);
			$stmt->bindparam(':cus_name' ,$cus_name);
			$stmt->bindparam(':cus_addres' ,$cus_addres);
			$stmt->bindparam(':cus_email' ,$cus_email);
			$stmt->bindparam(':cus_mobile' ,$cus_mobile);
			$stmt->bindparam(':cus_dob' ,$cus_dob);
            $stmt->execute();
            return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
            
    }
	public function getcustomerdetails($cus_id){
        try{
        $sql = "select * from customer where cus_id = :cus_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':cus_id', $cus_id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
	public function editvehicle($veh_id,$veh_num,$veh_type,$chechis,$engine_no,$veh_desc,$cus_id){
        try{ 
            $sql = "UPDATE `vehicle` SET `veh_id`=:veh_id,`veh_num`=:veh_num,`veh_type`=:veh_type,`chechis`=:chechis,`engine_no`=:engine_no,`veh_desc`=:veh_desc,`cus_id`=:cus_id WHERE veh_id = :veh_id ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':veh_id' ,$veh_id);
			$stmt->bindparam(':veh_num' ,$veh_num);
			$stmt->bindparam(':veh_type' ,$veh_type);
			$stmt->bindparam(':chechis' ,$chechis);
			$stmt->bindparam(':engine_no' ,$engine_no);
			$stmt->bindparam(':veh_desc' ,$veh_desc);
			$stmt->bindparam(':cus_id' ,$cus_id);
            $stmt->execute();
            return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
	}
	public function getvehicledetails($veh_id){
        try{
        $sql = "select * from vehicle where veh_id = :veh_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':veh_id', $veh_id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
	public function getvehicle(){
        try{
            $sql = "SELECT * FROM `vehicle`";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
           
    }
	public function deletevehicle($veh_id){
        try{
            $sql = "delete from vehicle where veh_id = :veh_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':veh_id', $veh_id);
            $stmt->execute();
            return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
	public function editdl($dl_id,$dl_no,$license_type,$issue_date,$exp_date,$issue_city,$cus_id){
        try{ 
            $sql = "UPDATE `driver_license` SET `dl_id`=:dl_id,`dl_no`=:dl_no,`license_type`=:license_type,`issue_date`=:issue_date,`exp_date`=:exp_date,`issue_city`=:issue_city,`cus_id`=:cus_id WHERE dl_id = :dl_id ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':dl_id' ,$dl_id);
			$stmt->bindparam(':dl_no' ,$dl_no);
			$stmt->bindparam(':license_type' ,$license_type);
			$stmt->bindparam(':issue_date' ,$issue_date);
			$stmt->bindparam(':exp_date' ,$exp_date);
			$stmt->bindparam(':issue_city' ,$issue_city);
			$stmt->bindparam(':cus_id' ,$cus_id);
            $stmt->execute();
            return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
	}
	public function getdldetails($dl_id){
        try{
        $sql = "select * from driver_license where dl_id = :dl_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':dl_id', $dl_id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
	public function getdl(){
        try{
            $sql = "SELECT * FROM `driver_license`";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
           
    }
	public function deletedl($dl_id){
        try{
            $sql = "delete from driver_license where dl_id = :dl_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':dl_id', $dl_id);
            $stmt->execute();
            return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
	}  
	public function editbooking($booking_id,$reg_fee,$temp_no,$cus_id,$status,$pamveh_no){
        try{ 
            $sql = "UPDATE `booking` SET `booking_id`=:booking_id,`reg_fee`=:reg_fee,`temp_no`=:temp_no,`cus_id`=:cus_id,`status`=:status,`pamveh_no`=:pamveh_no WHERE booking_id = :booking_id ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':booking_id' ,$booking_id);
			$stmt->bindparam(':reg_fee' ,$reg_fee);
			$stmt->bindparam(':temp_no' ,$temp_no);
			$stmt->bindparam(':cus_id' ,$cus_id);
			$stmt->bindparam(':status' ,$status);
			$stmt->bindparam(':pamveh_no' ,$pamveh_no);
            $stmt->execute();
            return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
	}
	public function getbookingdetails($booking_id){
        try{
        $sql = "select * from booking where booking_id = :booking_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':booking_id', $booking_id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
	public function getbooking(){
        try{
            $sql = "SELECT * FROM `booking`";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
           
    }
	public function deletebooking($booking_id){
        try{
            $sql = "delete from booking where booking_id = :booking_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':booking_id', $booking_id);
            $stmt->execute();
            return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
	}
	public function sbooking(){
        try{
            $sql = "SELECT * FROM `booking`";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
           
    }
	public function getlogs(){
        try{
            $sql = "SELECT * FROM `logs`";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
           
    }

}
?>