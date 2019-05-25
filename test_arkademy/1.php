<?php
class myObject{
	public $skill;
}

function biodata(){
	$mySkills = new myObject();
	$mySkills->skill['name'] = 'PHP';
	$mySkills->skill['score'] = '99';

	$school = new stdClass();
	$school->highSchool = 'Universitas Muhammadiyah Malang';

	echo json_encode(array(
				'name' => 'Lutfi Widyanto', 
				'address' => 'Dusun Lemah Duwur No 14 RT 07 RW 01 Desa Sitirejo Kecamatan Wagir Kabupaten Malang',
				'hobbies' => ['membaca','menonton film'],
				'is_married' => false,
				'school' => $school,
				'skills' => $mySkills->skill,
				));
}

biodata();