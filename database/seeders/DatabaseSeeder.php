<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $data = [
            ['first_name' => 'กัญญารัตน์', 'last_name' => 'สร้อยสัมฤทธิ์', 'username' => '','usercode'=> '1160102060028', 'email' => '','password' => ''],
            ['first_name' => 'ไววิทย์', 'last_name' => 'สาธุธรรม', 'username' => '','usercode'=> '1160102060044', 'email' => '','password' => ''],
            ['first_name' => 'ศิวภัทร ', 'last_name' => 'พูลศิลป์', 'username' => '','usercode'=> '1160102060051', 'email' => '','password' => ''],
            ['first_name' => 'กรรณิการ์', 'last_name' => 'ุพันธ์ชมภู', 'username' => '','usercode'=> '1160102060077', 'email' => '','password' => ''],
            ['first_name' => 'ธวัลพร', 'last_name' => 'ชื่นเพ็ง', 'username' => '','usercode'=> '1160102060101', 'email' => '','password' => ''],
            ['first_name' => 'ศุภกานต์', 'last_name' => 'จิตประไพ', 'username' => '','usercode'=> '1160102060119', 'email' => '','password' => ''],
            ['first_name' => 'โสภณวิชญ์', 'last_name' => 'เนระแก', 'username' => '','usercode'=> '1160102060127', 'email' => '','password' => ''],
            ['first_name' => 'นพรัตน์', 'last_name' => 'อำพันศรี', 'username' => '','usercode'=> '1160102060135', 'email' => '','password' => ''],
            ['first_name' => 'เบญญาภา', 'last_name' => 'บุญยง', 'username' => '','usercode'=> '1160102060143', 'email' => '','password' => ''],
            ['first_name' => 'อมรา', 'last_name' => 'อมรึก', 'username' => '','usercode'=> '1160102060150', 'email' => '','password' => ''],
            ['first_name' => 'สรวิชญ์', 'last_name' => 'เกตุศีระ', 'username' => '','usercode'=> '1160102060169', 'email' => '','password' => ''],
            ['first_name' => 'ธนวัฒน์ ', 'last_name' => 'แนบชัยภูมิ', 'username' => '','usercode'=> '1160102060176', 'email' => '','password' => ''],
            ['first_name' => 'ศุภรักษ์', 'last_name' => 'อุดมแก้ว', 'username' => '','usercode'=> '1160102060184', 'email' => '','password' => ''],
            ['first_name' => 'ณัฏฐณิชา', 'last_name' => 'ทะเสนฮด', 'username' => '','usercode'=> '1160102060192', 'email' => '','password' => ''],
            ['first_name' => 'วีรภัทร', 'last_name' => 'รอดสิน', 'username' => '','usercode'=> '1160102060218', 'email' => '','password' => ''],
            ['first_name' => 'ภาคภูมิ', 'last_name' => 'เงินสมบัติ', 'username' => '','usercode'=> '1160102060226', 'email' => '','password' => ''],
            ['first_name' => 'วิชิต', 'last_name' => 'คชสุวรรณ', 'username' => '','usercode'=> '1160102060234', 'email' => '','password' => ''],
            ['first_name' => 'กนกวรรณ', 'last_name' => 'พ่วงศร', 'username' => '','usercode'=> '1160102060259', 'email' => '','password' => ''],
            ['first_name' => 'นราธิป', 'last_name' => 'พุฒิเสถียร', 'username' => '','usercode'=> '1160102060267', 'email' => '','password' => ''],
            ['first_name' => 'พรธิรา ', 'last_name' => 'ดวงพายัพ', 'username' => '','usercode'=> '1160102060275', 'email' => '','password' => ''],
            ['first_name' => 'อนุชา', 'last_name' => 'อินทร์ประเทือง', 'username' => '','usercode'=> '1160102060309', 'email' => '','password' => ''],
            ['first_name' => 'ณัฐมล', 'last_name' => 'ไม้ฝาก', 'username' => '','usercode'=> '1160102060317', 'email' => '','password' => ''],
            ['first_name' => 'สหรัฐ', 'last_name' => 'ร่มไทรทอง', 'username' => '','usercode'=> '1160102060333', 'email' => '','password' => ''],
            ['first_name' => 'ศิวกร', 'last_name' => 'คุณากันต์', 'username' => '','usercode'=> '1160102060341', 'email' => '','password' => ''],
            ['first_name' => 'ธารา', 'last_name' => 'ผลอุดม', 'username' => '','usercode'=> '1160102060358', 'email' => '','password' => ''],
            ['first_name' => 'จิรัฐติพล', 'last_name' => 'นาคทองดี', 'username' => '','usercode'=> '1160102060366', 'email' => '','password' => ''],
            ['first_name' => 'ปวรุตม์', 'last_name' => 'บุตรจันทรํ', 'username' => '','usercode'=> '1160102060374', 'email' => '','password' => ''],
            ['first_name' => 'ณัฐกานต์', 'last_name' => 'ทองสุทธิ์', 'username' => '','usercode'=> '1160102060382', 'email' => '','password' => ''],
            ['first_name' => 'นพพล', 'last_name' => 'และนุช', 'username' => '','usercode'=> '1160102060390', 'email' => '','password' => ''],
            ['first_name' => 'ธีรพงษ์', 'last_name' => 'บัวสุวรรณ', 'username' => '','usercode'=> '1160102060408', 'email' => '','password' => ''],
            ['first_name' => 'ธนกร', 'last_name' => 'กลางอรัญ', 'username' => '','usercode'=> '1160102060424', 'email' => '','password' => ''],
            ['first_name' => 'ธนวัฒน์', 'last_name' => 'รจนาสม', 'username' => '','usercode'=> '1160102060432', 'email' => '','password' => ''],
            ['first_name' => 'วันใหม่', 'last_name' => 'ศุภราทิตย์', 'username' => '','usercode'=> '1160102060440', 'email' => '','password' => ''],
            ['first_name' => 'ณัฐพจน์', 'last_name' => 'จันทร์รอด', 'username' => '','usercode'=> '1160102060457', 'email' => '','password' => ''],
        ];

        $pwd = "1q2w3e4r5t6y";
        $i = 1;

        User::create(['first_name' => 'Administrator', 'last_name' => '', 'username' => 'administrator','usercode'=> '000000000001', 'email' => 'admin@localhost.com','password' => Hash::make($pwd), 'is_admin' => true]);
        User::create(['first_name' => 'Teacher001', 'last_name' => '', 'username' => 'teacher001','usercode'=> 'T00000000002', 'email' => 'teacher01@localhost.com','password' => Hash::make($pwd), 'is_teacher' => true]);
        foreach ($data as $u)
        {
            $user_id = "USER" . $i;
            $mail = "student".$i."@mail.com";
            $u['username'] = $user_id;
            $u['email'] = $mail;
            $u['password'] = Hash::make($pwd);
            User::create($u);
            $this->command->info($u['first_name'] . " => " . $u['username']);
            $i++;
        }
        // \App\Models\User::factory(10)->create();
    }
}
