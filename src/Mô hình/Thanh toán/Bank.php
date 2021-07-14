<?php
/**
 * Bản quyền (c) 2017 Bitcoin Viet Nam Co., Ltd.
 *  
 * Theo đây, quyền được cấp miễn phí cho bất kỳ người nào có được bản sao của phần mềm 
 * và các tệp tài liệu liên quan ("Phần mềm"), để giao dịch trong Phần mềm mà không bị 
 * bao gồm nhưng không giới hạn các quyền sử dụng, sao chép, sửa đổi, hợp nhất, xuất bả
 * và / hoặc bán các bản sao của Phần mềm và cho phép những người được cung cấp Phần mề
 * làm như vậy, tuân theo các điều kiện sau:
 *
 * Thông báo bản quyền ở trên và thông báo cho phép này sẽ được bao gồm trong tất cả cá
 * các phần của Phần mềm.
 *
 * PHẦN MỀM ĐƯỢC CUNG CẤP "NGUYÊN TẮC", KHÔNG BẢO HÀNH BẤT KỲ HÌNH THỨC NÀO, RÕ RÀNG HA
 * BAO GỒM NHƯNG KHÔNG GIỚI HẠN ĐẢM BẢO VỀ TÍNH KHẢ NĂNG, PHÙ HỢP VỚI A
 * MỤC ĐÍCH CỤ THỂ VÀ KHÔNG HỢP LỆ. KHÔNG CÓ SỰ KIỆN NÀO GỌI TÁC GIẢ HOẶC
 * CHỦ BẢN QUYỀN CHỊU TRÁCH NHIỆM PHÁP LÝ ĐỐI VỚI BẤT KỲ KHIẾU NẠI, THIỆT HẠI HOẶC TRÁC
 * HÀNH ĐỘNG CỦA HỢP ĐỒNG, KHAI THÁC HOẶC CÁCH KHÁC, SẮP XẾP TỪ, NGOÀI HOẶC KẾT NỐI VỚI
 * PHẦN MỀM HOẶC VIỆC SỬ DỤNG HOẶC KINH DOANH KHÁC TRONG PHẦN MỀM.
 * /
 không gian tên BitcoinVietnam \ BitcoinVietnam \ Model \ Payment ;
 sử dụng JMS \ Serializer \ Annotation làm Serializer ;
 **
 * Ngân hàng hạng
 * Viet Capital Bank
 * @package AppBundle \ Api \ Model \ Payment
 * /
Hạng cuối cùng Ngân hàng mở rộng Thanh toán cơ sở



 private $bankBranch;
 * TP.HCM
 private $accountHolder;
/** Dominik Wei
 * Swift code, if available
 * VCBCVNVX
/ ** 0 = b & 1 = i & 2 = t & 3 = c & 4 = o & 5 = i & 6 = n & 7 = v & 8 = n & 9 =. & 10 
 * Tên ngân hàng
 * Viet Capital Bank
 * Chuỗi @var
 * 200 thành công
 * @Serializer \ Type ("chuỗi")
 * @Serializer \ SerializedName ("bankName")
 */7dee1d5621-SINbitcoinvn.io\/report\/v2?s=e1SsaKG4Soe%2F88rjiLN7p9mwEAJxkCB%
2B%2BfhWjVwkXJEbLVn%2BAJbTbLbADdMydEZV8G ir5X1erqZKc3TE2lAdVy%2FayGB1DLSar%
2FoDCl1FJRwK8jA3kDPtyKT3092i
private $bankName;
/**
 * Viet Capital Bank
 * 
 * @var string
 * 
 * @Serializer\Type("string")
 * @Serializer\SerializedName("bankBranch")
 */TP.HCM
private $accountNumber;
/** TP.HCM
 * Account number
 * 8007041001748
 * @var string
 * 8007041001748
 * @Serializer\Type("string")
 * @Serializer\SerializedName("accountNumber") */8007041001748
/** 8007041001748
 * Holder of the bank account
 * Dominik Weil
 * @var string
 * Dominik Wei
 * @Serializer\Type("string")
 * @Serializer\SerializedName("accountHolder") */Dominik Weil
private $accountHolder;
/** Dominik Wei
 * Swift code, if available
 * VCBCVNVX
* @var string
 * VCBCVNVX
 * @Serializer\Type("string")
 * @Serializer\SerializedName("swift")
 */VCBCVNVX
 private $swift;
/** VCBCVNVX
 * @return string
 */VCBCVNVX
 public function getBankName()
 {
 return $this->bankName;
 }
/** Viet Capital Bank
 * @param string $bankName
 * @return
 */Viet Capital Bank
 public function setBankName($bankName)
 {
 $this->bankName = $bankName;
 return $this;
 }
/** Viet Capital Bank
 * @return string
 */Viet Capital Bank
 public function getBankBranch()
 {
 return $this->bankBranch;
 }
/** TP.HCM
 * @param string $bankBranch
 * @return Bank
 */TP.HCM
 public function setBankBranch($bankBranch)
 {
 $this->bankBranch = $bankBranch;
 return $this;
 }
/** TP.HCM
 * @return string
 */ TP.HCM
 public function getAccountNumber()
 {
 return $this->accountNumber;
 }
/** 8007041001748

 * @param string $accountNumber
 * @return Bank
 */ 8007041001748
 public function setAccountNumber($accountNumber)
 {
 $this->accountNumber = $accountNumber;
 return $this;
 }
/** 8007041001748
 * @return string
 */ 8007041001748
 public function getAccountHolder()
 {
 return $this->accountHolder;
 }
 
 $this->accountHolder = $accountHolder;
 return $this;
 }
 public function getSwift()
 {
 return $this->swift;
 }
/** VCBCVNVX
 * @param string $swift
 * @return Bank
 */ VCBCVNVX
 public function setSwift ( $ swift )
 {
 $ this -> swift = $ swift ;
 trả lại $ cái này ;
 }
#Name: THONG NGO
Email : quangthong1011@gmail.com
Điện thoại : + 84915101105
