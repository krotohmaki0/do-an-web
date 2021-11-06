<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/style.css">
	<title>Profile</title>
	<style>
		body.profile {
			background-image: url("/images/profile-background.png");
			background-attachment: fixed;
			background-size: cover;
		}

		#avatar-display {
			width: 100%;
		}

		.profile-label {
			width: 50px;
		}

		input[type="file"] {
			display: none;
		}
	</style>
</head>
<body class="profile">
	<div class="row">
		<div class="col-12 col-sm-4">
			<img id="profile-avatar-display" class="rounded-circle" src="/upload/user-default.png" alt="avatar">
		</div>
		<div class="col-12 col-sm-8 text-light">
			<h2 class="text-center">Thông tin</h2>
			<p>
				<strong>Họ và tên: </strong>
				<span id="profile-hoTen">Tên này<span>
			</p>
			<p>
				<strong>Năm sinh: </strong>
				<span id="profile-namSinh">Năm sinh này<span>
			</p>
			<p>
				<strong>Chức vụ: </strong>
				<span id="profile-chucVu">Chức vụ này</span>
			</p>
			<p>
				<strong>Phòng ban: </strong>
				<span id="profile-phongBan">Phòng ban này</span>
			</p>
			<div>
				<input id="profile-file" type="file" name="avatar">
				<button id="profile-avatar-btn" class="btn btn-primary">Đổi ảnh đại diện</button>
				<button id="profile-confirm" class="btn btn-primary">Xác nhận</button>
				<button id="profile-password-change" class="btn btn-primary">Đổi mật khẩu</button>
			</div>
		</div>
	</div>

	<script>
		$(document).ready((e) => {
			$("#profile-confirm").hide();

			$("#profile-avatar-btn").click((e) => {
				$("#profile-file").click();
			});

            $("#file").change((e) => {
				$("#profile-avatar-btn").text("Chọn lại");
				$("#profile-confirm").show();

				let profileFd = new FormData();
                let profileFiles = $("#profile-file")[0].files[0];

                profileFd.append("file", profileFiles);

                $.ajax({
                    url: "/admin/post-img.php",
                    type: "POST",
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: (res) => {
						$("#profile-avatar-display").attr("src", "/" + res);
                    }
                });
            });

			$("#profile-confirm").click((e) => {
				$("#profile-confirm").hide();
				$("#profile-avatar-btn").text("Đổi ảnh đại diện");
			});
		});
	</script>
</body>
</html>