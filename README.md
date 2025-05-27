Các phần mềm cần cài đặt:
PHP
Xampp

HƯỚNG DẪN CLONE MÃ NGUỒN TỪ GITHUB VỀ MÁY
Bước 1: Mở Terminal (hoặc Git Bash trên Windows)

Bước 2: Di chuyển đến thư mục bạn muốn lưu code
Ví dụ:
cd Desktop
hoặc:
cd /duong/dan/thu-muc

Bước 3: Chạy lệnh git clone với link của repository
Cú pháp:
git clone https://github.com/Time2Rice/Project.git

Bước 4: Di chuyển vào thư mục dự án vừa clone về
cd Project

Bước 5: Kiểm tra các file đã được clone
ls      (trên Linux/macOS)
hoặc
dir     (trên Windows)
Ghi chú:
- Bạn cần cài sẵn Git: https://git-scm.com/

---------------------------------------------------------------------------------

HƯỚNG DẪN TẠO BRANCH MỚI & MERGE VÀO MAIN
Bước 1: Kiểm tra bạn đang ở trong Git repo
git status
(nếu chưa phải repo, hãy clone trước:
 git clone https://github.com/Time2Rice/Project.git
 cd Project)

Bước 2: Tạo branch mới và chuyển sang branch đó
git checkout -b ten-branch-moi
(Ví dụ: git checkout -b update-login-feature)

Bước 3: Thực hiện thay đổi code và commit
git add .
git commit -m "Mô tả thay đổi của bạn"

Bước 4: Push branch mới lên GitHub
git push -u origin ten-branch-moi

Bước 5: Tạo pull request (PR) trên GitHub để merge vào main
- Truy cập repository trên GitHub
- Chọn Compare & pull request
- Kiểm tra lại thay đổi rồi chọn 'Merge pull request'

Bước 6: Sau khi merge, có thể xóa branch nếu không cần nữa
git branch -d ten-branch-moi
