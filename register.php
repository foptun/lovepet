<div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="index.php?menu=home">Home</a>
                        </li>
                        <li>สมัครสมาชิก</li>
                    </ul>

                </div>


                <div class="col-md-12">
                    <div class="box">
                        <h1>สมัครสมาชิก</h1>

                        <hr>

                        <form action="index.php?menu=register-insert" method="post">
                            <div class="form-group">
                                <label for="name">ชื่อ</label>
                                <input type="text" class="form-control" name="f_name" required>
                            </div>
                            <div class="form-group">
                                <label for="name">สกุล</label>
                                <input type="text" class="form-control" name="l_name" required>
                            </div>
                            <div class="form-group">
                                <label for="password">รหัสผู้ใช้</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">รหัสผ่าน</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="name">ที่อยู่</label>
                                <textarea class="form-control" name="address" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="password">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="email">เฟสบุ๊ค</label>
                                <input type="text" class="form-control" name="facebook" required>
                            </div>
                            <div class="form-group">
                                <label for="email">อีเมลล์</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="email">ไลน์</label>
                                <input type="text" class="form-control" name="line" required>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> สมัครสมาชิก</button>
                            </div>
                        </form>
                    </div>
                </div>


</div>
<!-- /.container -->