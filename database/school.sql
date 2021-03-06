-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2021 at 01:31 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) NOT NULL,
  `id_menu` int(20) DEFAULT '0',
  `module` varchar(512) DEFAULT '',
  `code` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `id_menu`, `module`, `code`, `description`, `status`) VALUES
(7, 3, 'Setup', 'permission.add', 'Add Permission', 1),
(8, 3, 'Setup', 'permission.list', 'View Permission', 1),
(9, 3, 'Setup', 'permission.edit', 'Edit Permission', 1),
(10, 1, 'Setup', 'user.edit', 'Edit User', 1),
(11, 1, 'Setup', 'user.add', 'Add User', 1),
(12, 1, 'Setup', 'user.list', 'View User', 1),
(13, 2, 'Setup', 'role.list', 'View Role', 1),
(14, 2, 'Setup', 'role.add', 'Add Role', 1),
(15, 2, 'Setup', 'role.edit', 'Edit Role', 1),
(70, 4, 'Setup', 'salutation.list', 'Salutation List', 1),
(71, 4, 'Setup', 'salutation.add', 'Salutation Add', 1),
(72, 4, 'Setup', 'salutation.edit', 'Salutation Edit', 1),
(73, 5, 'Setup', 'country.list', 'Country List', 1),
(74, 5, 'Setup', 'country.add', 'Country Add', 1),
(75, 5, 'Setup', 'country.edit', 'Country Edit', 1),
(76, 6, 'Setup', 'state.list', 'State List', 1),
(77, 7, 'Setup', 'education_level.list', 'Education Level List', 1),
(78, 7, 'Setup', 'education_level.add', 'Education Level Add', 1),
(79, 7, 'Setup', 'education_level.edit', 'Education Level Edit', 1),
(80, 8, 'Setup', 'academic_year.list', 'Academic Year List', 1),
(81, 8, 'Setup', 'academic_year.add', 'Academic Year Add', 1),
(82, 8, 'Setup', 'academic_year.edit', 'Academic Year Edit', 1),
(83, 9, 'Setup', 'award.list', 'Award List', 1),
(84, 9, 'Setup', 'award.add', 'Award Add', 1),
(85, 9, 'Setup', 'award.edit', 'Award Edit', 1),
(86, 10, 'Setup', 'race.list', 'Race List', 1),
(87, 10, 'Setup', 'race.add', 'Race Add', 1),
(88, 10, 'Setup', 'race.edit', 'Race Edit', 1),
(89, 11, 'Setup', 'religion.list', 'Religion List', 1),
(90, 11, 'Setup', 'religion.add', 'Religion Add', 1),
(91, 11, 'Setup', 'religion.edit', 'Religion Edit', 1),
(92, 12, 'Setup', 'nationality.list', 'Nationality List', 1),
(93, 12, 'Setup', 'nationality.add', 'Nationality Add', 1),
(94, 12, 'Setup', 'nationality.edit', 'Nationality Edit', 1),
(95, 13, 'Setup', 'department.list', 'Department List', 1),
(96, 13, 'Setup', 'department.add', 'Department Add', 1),
(97, 13, 'Setup', 'department.edit', 'Department Edit', 1),
(98, 14, 'Setup', 'organisation.edit', 'Organisation Edit', 1),
(99, 15, 'Setup', 'partner_category.list', 'Partner Category List', 1),
(100, 15, 'Setup', 'partner_category.add', 'Partner Category Add', 1),
(101, 15, 'Setup', 'partner_category.edit', 'Partner Category Edit', 1),
(102, 16, 'Setup', 'partner_university.list', 'Partner University List', 1),
(103, 16, 'Setup', 'partner_university.add', 'Partner University Add', 1),
(104, 16, 'Setup', 'partner_university.edit', 'Partner University Edit', 1),
(105, 17, 'Setup', 'faculty_program.list', 'Faculty Program List', 1),
(106, 17, 'Setup', 'faculty_program.add', 'Faculty Program Add', 1),
(107, 17, 'Setup', 'faculty_program.edit', 'Faculty Program Edit', 1),
(108, 18, 'Setup', 'course_description.list', 'course Major / Minor List', 1),
(109, 18, 'Setup', 'course_description.add', 'course Major / Minor Add', 1),
(110, 18, 'Setup', 'course_description.edit', 'course Major / Minor Edit', 1),
(111, 19, 'Setup', 'course_type.list', 'Course Type list', 1),
(112, 19, 'Setup', 'course_type.add', 'Course Type Add', 1),
(113, 19, 'Setup', 'course_type.edit', 'Course Type Edit', 1),
(114, 20, 'Setup', 'course_offered,list', 'Course Offered List', 1),
(115, 20, 'Setup', 'course_offered,add', 'Course Offered Add', 1),
(116, 20, 'Setup', 'course_offered,edit', 'Course Offered Edit', 1),
(117, 21, 'Setup', 'course.list', 'Course List', 1),
(118, 21, 'Setup', 'course.add', 'Course Add', 1),
(119, 21, 'Setup', 'course.edit', 'Course Edit', 1),
(120, 22, 'Setup', 'course_master.list', 'Course Requisite List', 1),
(121, 22, 'Setup', 'course_master.add', 'Course Requisite Add', 1),
(122, 22, 'Setup', 'course_master.edit', 'Course Requisite Edit', 1),
(123, 23, 'Setup', 'equivalent_course.list', 'Equivalent Course List', 1),
(124, 23, 'Setup', 'equivalent_course.add', 'Equivalent Course Add', 1),
(125, 23, 'Setup', 'equivalent_course.edit', 'Equivalent Course Edit', 1),
(126, 24, 'Setup', 'scheme.list', 'Scheme List', 1),
(127, 24, 'Setup', 'scheme.add', 'Scheme Add', 1),
(128, 24, 'Setup', 'scheme.edit', 'Scheme Edit', 1),
(129, 25, 'Setup', 'activity.list', 'Activity List', 1),
(130, 25, 'Setup', 'activity.add', 'Activity Add', 1),
(131, 25, 'Setup', 'activity.edit', 'Activity Edit', 1),
(132, 26, 'Setup', 'semester.list', 'Semester List', 1),
(133, 26, 'Setup', 'semester.add', 'Semester Add', 1),
(134, 26, 'Setup', 'semester.edit', 'Semester Edit', 1),
(135, 27, 'Setup', 'intake.list', 'Intake List', 1),
(136, 27, 'Setup', 'intake.add', 'Intake Add', 1),
(137, 27, 'Setup', 'intake.edit', 'Intake Edit', 1),
(138, 28, 'Setup', 'landscape_course_type.list', 'Landscape CourseType List', 1),
(139, 28, 'Setup', 'landscape_course_type.add', 'Landscape CourseType Add', 1),
(140, 28, 'Setup', 'landscape_course_type.edit', 'Landscape CourseType Edit', 1),
(141, 29, 'Setup', 'program_type.list', 'Program Type list', 1),
(142, 29, 'Setup', 'program_type.add', 'Program Type Add', 1),
(143, 29, 'Setup', 'program_type.edit', 'Program Type Edit', 1),
(144, 30, 'Setup', 'programme.list', 'Programme List', 1),
(145, 30, 'Setup', 'programme.add', 'Programme Add', 1),
(146, 30, 'Setup', 'programme.edit', 'Programme Edit', 1),
(147, 31, 'Setup', 'programme_landscape.list', 'Programme Landscape List', 1),
(148, 31, 'Setup', 'programme_landscape.add', 'Programme Landscape Add', 1),
(149, 31, 'Setup', 'programme_landscape.edit', 'Programme Landscape Edit', 1),
(150, 32, 'Setup', 'programme_entry_requirement.list', 'Programme Entry Requirement List', 1),
(151, 32, 'Setup', 'programme_entry_requirement.add', 'Programme Entry Requirement Add', 1),
(152, 32, 'Setup', 'programme_entry_requirement.edit', 'Programme Entry Requirement Edit', 1),
(153, 33, 'Setup', 'documents_program.list', 'Documents Reuired Program List', 1),
(154, 33, 'Setup', 'documents_program.add', 'Documents Reuired Program Add', 1),
(155, 33, 'Setup', 'documents_program.edit', 'Documents Reuired Program Edit', 1),
(156, 34, 'Setup', 'staff.list', 'Staff List', 1),
(157, 34, 'Setup', 'staff.add', 'Staff Add', 1),
(158, 34, 'Setup', 'staff.edit', 'Staff Edit', 1),
(159, 35, 'Setup', 'course_withdraw.list', 'Course Withdraw List', 1),
(160, 35, 'Setup', 'course_withdraw.add', 'Course Withdraw Add', 1),
(161, 35, 'Setup', 'course_withdraw.edit', 'Course Withdraw Edit', 1),
(162, 36, 'Setup', 'late_registration.list', 'Late Registration List', 1),
(163, 36, 'Setup', 'late_registration.add', 'Late Registration Add', 1),
(164, 36, 'Setup', 'late_registration.edit', 'Late Registration Edit', 1),
(165, 37, 'Setup', 'report.student_by_intake', 'Report Student By Intake', 1),
(166, 38, 'Setup', 'report.applicant_lead_student', 'Report Applicant Lead Student', 1),
(167, 39, 'Setup', 'report.course_wise_data', 'Report Course Wise Data', 1),
(168, 40, 'Admission', 'group_setup.list', 'Group Setup List', 1),
(169, 40, 'Admission', 'group_setup.add', 'Group Setup Add', 1),
(170, 40, 'Admission', 'group_setup.edit', 'Group Setup Edit', 1),
(171, 41, 'Admission', 'specialization_setup.list', 'Specialization List', 1),
(172, 41, 'Admission', 'specialization_setup.add', 'Specialization Add', 1),
(173, 41, 'Admission', 'specialization_setup.edit', 'Specialization Edit', 1),
(174, 42, 'Admission', 'applicant.list', 'Applicant List', 1),
(175, 42, 'Admission', 'applicant.view', 'Applicant View', 1),
(176, 43, 'Admission', 'apel_approval.list', 'Apel Approval List', 1),
(177, 43, 'Admission', 'apel_approval.approve', 'Apel Approve', 1),
(178, 44, 'Admission', 'sibbling_discount_approval.list', 'Sibbling Discount Approval List', 1),
(179, 44, 'Admission', 'sibbling_discount_approval.approve', 'Sibbling Discount Approve', 1),
(180, 45, 'Admission', 'employee_discount_approval.list', 'Employee Discount Approval List', 1),
(181, 45, 'Admission', 'employee_discount_approval.approve', 'Employee Discount Approve', 1),
(182, 46, 'Admission', 'alumni_discount_approval.list', 'Alumni Discount Approval List', 1),
(183, 46, 'Admission', 'alumni_discount_approval.approve', 'Alumni Discount Approve', 1),
(184, 47, 'Admission', 'applicant_approval.list', 'Applicant Approval List', 1),
(185, 47, 'Admission', 'applicant_approval.approve', 'Applicant Approve', 1),
(186, 48, 'Registration', 'student_approval.list', 'Student Approval List', 1),
(187, 48, 'Registration', 'student_approval.approve', 'Student Approval Approve', 1),
(188, 49, 'Registration', 'advisor_tagging.add', 'Academic Advisor Tagging Add/ Edit', 1),
(189, 50, 'Registration', 'course_registration.list', 'Course Registration List', 1),
(190, 50, 'Registration', 'course_registration.add', 'Course Registration Add', 1),
(191, 50, 'Registration', 'course_registration.view', 'Course Registration View', 1),
(192, 51, 'Registration', 'bulk_withdraw.list', 'Bulk Withdraw List', 1),
(193, 51, 'Registration', 'bulk_withdraw.add', 'Bulk Withdraw Add', 1),
(194, 51, 'Registration', 'bulk_withdraw.view', 'Bulk Withdraw View', 1),
(195, 52, 'Registration', 'credit_transfer.list', 'Credit Transfer / Excemption Application List', 1),
(196, 52, 'Registration', 'credit_transfer.add', 'Credit Transfer / Excemption Application Add', 1),
(197, 52, 'Registration', 'credit_transfer.view', 'Credit Transfer / Excemption Application View', 1),
(198, 52, 'Registration', 'credit_transfer.approval_list', 'Credit Transfer / Excemption Application Approval List', 1),
(199, 52, 'Registration', 'credit_transfer.approve', 'Credit Transfer / Excemption Application Approve', 1),
(200, 54, 'Registration', 'attendence_setup.list', 'Attendence Setup List', 1),
(201, 54, 'Registration', 'attendence_setup.add', 'Attendence Setup Add', 1),
(202, 54, 'Registration', 'attendence_setup.view', 'Attendence Setup View', 1),
(203, 55, 'Registration', 'report.course_count', 'Report Course Count', 1),
(204, 56, 'Records', 'barring_type.list', ' Barring Type List', 1),
(205, 56, 'Records', 'barring_type.add', ' Barring Type Add', 1),
(206, 56, 'Records', 'barring_type.edit', ' Barring Type Edit', 1),
(207, 57, 'Records', 'barring.list', 'Barring List', 1),
(208, 57, 'Records', 'barring.add', 'Barring Add', 1),
(209, 57, 'Records', 'barring.edit', 'Barring Edit', 1),
(210, 58, 'Records', 'release.list', 'Release List', 1),
(211, 58, 'Records', 'release.add', 'Release Add', 1),
(212, 58, 'Records', 'release.dedit', 'Release Edit', 1),
(213, 59, 'Records', 'student.list', 'Student List', 1),
(214, 59, 'Records', 'student.edit', 'Student Edit', 1),
(215, 60, 'Records', 'student_record.list', 'Student Record List', 1),
(216, 60, 'Records', 'student_record.view', 'Student Record View', 1),
(217, 61, 'Records', 'change_status.list', 'Change Status List', 1),
(218, 61, 'Records', 'change_status.add', 'Change Status Add', 1),
(219, 61, 'Records', 'change_status.edit', 'Change Status Edit', 1),
(220, 62, 'Records', 'apply_change_status.list', 'Apply Change Status List', 1),
(221, 62, 'Records', 'apply_change_status.add', 'Apply Change Status Add', 1),
(222, 62, 'Records', 'apply_change_status.view', 'Apply Change Status View', 1),
(223, 63, 'Records', 'apply_change_status.approval_list', 'Apply Change Status Approval List', 1),
(224, 63, 'Records', 'apply_change_status.approve', 'Apply Change Status Approve', 1),
(225, 64, 'Records', 'visa_details.student_list', 'Visa Details Student List', 1),
(226, 64, 'Records', 'visa_details.add', 'Visa Details Student Add', 1),
(227, 65, 'Records', 'apply_change_programme.list', 'Apply Change Programme List', 1),
(228, 65, 'Records', 'apply_change_programme.add', 'Apply Change Programme Add', 1),
(229, 65, 'Records', 'apply_change_programme.view', 'Apply Change Programme View', 1),
(230, 66, 'Records', 'apply_change_programme.approve', 'Apply Change Programme Approve', 1),
(231, 66, 'Records', 'apply_change_programme.approval_list', 'Apply Change Programme Approval List', 1),
(232, 67, 'Records', 'apply_change_scheme.list', 'Apply Change Scheme List', 1),
(233, 67, 'Records', 'apply_change_scheme.add', 'Apply Change Scheme Add', 1),
(234, 67, 'Records', 'apply_change_scheme.view', 'Apply Change Scheme View', 1),
(235, 68, 'Records', 'apply_change_scheme.approval_list', 'Apply Change Scheme Approval List', 1),
(236, 68, 'Records', 'apply_change_scheme.approve', 'Apply Change Scheme Approve', 1),
(237, 69, 'Records', 'change_branch.list', 'Change Branch List', 1),
(238, 69, 'Records', 'change_branch.add', 'Change Branch Add', 1),
(239, 69, 'Records', 'change_branch.view', 'Change Branch View', 1),
(240, 70, 'Records', 'change_branch.approval_list', 'Change Branch Approval List', 1),
(241, 70, 'Records', 'change_branch.approve', 'Change Branch Approve', 1),
(242, 71, 'Examination', 'exam_configuration.edit', 'Exam Configuration Edit', 1),
(243, 72, 'Examination', 'exam_configuration.edit', 'Exam Configuration Edit', 1),
(244, 73, 'Examination', 'gpa_cgpa.list', 'Gpa Cgpa List', 1),
(245, 73, 'Examination', 'gpa_cgpa.add', 'Gpa Cgpa Add', 1),
(246, 73, 'Examination', 'gpa_cgpa.edit', 'Gpa Cgpa Edit', 1),
(247, 74, 'Examination', 'assesment_type.list', 'Assesment Type List', 1),
(248, 74, 'Examination', 'assesment_type.add', 'Assesment Type Add', 1),
(249, 74, 'Examination', 'assesment_type.edit', 'Assesment Type Edit', 1),
(250, 75, 'Examination', 'grade_setup.list', 'Grade Setup List', 1),
(251, 75, 'Examination', 'grade_setup.add', 'Grade Setup Add', 1),
(252, 75, 'Examination', 'grade_setup.edit', 'Grade Setup Edit', 1),
(253, 76, 'Examination', 'course_grade.list', 'Course Grade List', 1),
(254, 76, 'Examination', 'course_grade.add', 'Course Grade Add', 1),
(255, 76, 'Examination', 'course_grade.edit', 'Course Grade Edit', 1),
(256, 77, 'Examination', 'publish_exam_result.list', 'Publish Exam Result List', 1),
(257, 77, 'Examination', 'publish_exam_result.add', 'Publish Exam Result Add', 1),
(258, 77, 'Examination', 'publish_exam_result.edit', 'Publish Exam Result Edit', 1),
(259, 78, 'Examination', 'location.list', 'Exam Locaction Setup', 1),
(260, 78, 'Examination', 'location.add', 'Exam Locaction Add', 1),
(261, 78, 'Examination', 'location.edit', 'Exam Locaction Edit', 1),
(262, 79, 'Examination', 'exam_center.list', 'Exam Center List', 1),
(263, 79, 'Examination', 'exam_center.add', 'Exam Center Add', 1),
(264, 79, 'Examination', 'exam_center.edit', 'Exam Center Edit', 1),
(265, 80, 'Examination', 'exam_event.list', 'Exam Event List', 1),
(266, 80, 'Examination', 'exam_event.add', 'Exam Event Add', 1),
(267, 80, 'Examination', 'exam_event.edit', 'Exam Event Edit', 1),
(268, 81, 'Examination', 'exam_registration.list', 'Exam Registration List', 1),
(269, 81, 'Examination', 'exam_registration.add', 'Exam Registration Add', 1),
(270, 82, 'Examination', 'exam_registration.tag_student', 'Exam Registration Tag Student', 1),
(271, 82, 'Examination', 'exam_registration.tag_list', 'Exam Registration Tag List', 1),
(272, 83, 'Examination', 'exam_slip.list', 'Release Exam Slip List', 1),
(273, 83, 'Examination', 'exam_slip.add', 'Release Exam Slip Add', 1),
(274, 83, 'Examination', 'exam_slip.view', 'Release Exam Slip View', 1),
(275, 84, 'Examination', 'publish_exam_result_date.list', 'Publish Exam Result Schedule List', 1),
(276, 84, 'Examination', 'publish_exam_result_date.add', 'Publish Exam Result Schedule Add', 1),
(277, 84, 'Examination', 'publish_exam_result_date.view', 'Publish Exam Result Schedule View', 1),
(278, 85, 'Examination', 'publish_assesment_result_date.list', 'Publish Assesment Result Schedule List', 1),
(279, 85, 'Examination', 'publish_assesment_result_date.add', 'Publish Assesment Result Schedule Add', 1),
(280, 85, 'Examination', 'publish_assesment_result_date.view', 'Publish Assesment Result Schedule View', 1),
(281, 86, 'Examination', 'mark_distribution.list', 'Mark Distribution List', 1),
(282, 86, 'Examination', 'mark_distribution.add', 'Mark Distribution Add', 1),
(283, 86, 'Examination', 'mark_distribution.view', 'Mark Distribution View', 1),
(284, 87, 'Examination', 'mark_distribution.approval_list', 'Mark Distribution Approval List', 1),
(285, 87, 'Examination', 'mark_distribution.approve', 'Mark Distribution Approve', 1),
(286, 88, 'Examination', 'student_marks_entry.approval_list', 'Student Marks Entry Approval List', 1),
(287, 88, 'Examination', 'student_marks_entry.approve', 'Student Marks Entry Approve', 1),
(288, 187, 'Examination', 'student_marks_entry.student_list', 'Student Marks Entry List', 1),
(289, 187, 'Examination', 'student_marks_entry.add', 'Student Marks Entry Add', 1),
(290, 89, 'Examination', 'student_marks_entry.summary_list', 'Student Marks Entry Summary List', 1),
(291, 89, 'Examination', 'student_marks_entry.summary_view', 'Student Marks Entry Summary View', 1),
(292, 90, 'Examination', 'remarking_application.entry_list', 'Remarks Entry List', 1),
(293, 90, 'Examination', 'remarking_application.add', 'Add Remarks', 1),
(294, 91, 'Examination', 'remarking_application.approval_list', 'Remark Entry Approval List', 1),
(295, 91, 'Examination', 'remarking_application.approve', 'Remark Entry Approve', 1),
(296, 92, 'Examination', 'remarking_application.summary_list', 'Student Remarks Application Summary List', 1),
(297, 92, 'Examination', 'remarking_application.view', 'Student Remarks Application Summary View', 1),
(298, 93, 'Examination', 'transcript.list', 'Transcript', 1),
(299, 93, 'Examination', 'transcript.view', 'Transcript View', 1),
(300, 94, 'Examination', 'result_slip.list', 'Result Slip', 1),
(301, 94, 'Examination', 'result_slip.view', 'Result Slip View', 1),
(302, 95, 'Graduation', 'award.list', 'Award List', 1),
(303, 95, 'Graduation', 'award.add', 'Award Add', 1),
(304, 95, 'Graduation', 'award.edit', 'Award Edit', 1),
(305, 96, 'Graduation', 'convocation.list', 'Award List', 1),
(306, 97, 'Graduation', 'guest.list', 'Guest List', 1),
(307, 97, 'Graduation', 'guest.add', 'Guest Add', 1),
(308, 97, 'Graduation', 'guest.edit', 'Guest Edit', 1),
(309, 98, 'Graduation', 'graduation.list', 'Graduation List', 1),
(310, 98, 'Graduation', 'graduation.add', 'Graduation Add', 1),
(311, 98, 'Graduation', 'graduation.view', 'Graduation View', 1),
(312, 98, 'Graduation', 'graduation.add_student', 'Graduation Add / Edit Students', 1),
(313, 99, 'Graduation', 'graduation.approval_list', 'Graduation Approval List', 1),
(314, 99, 'Graduation', 'graduation.approve', 'Graduation Approve', 1),
(315, 100, 'Finance', 'currency.list', 'Currency List', 1),
(316, 100, 'Finance', 'currency.add', 'Currency Add', 1),
(317, 100, 'Finance', 'currency.edit', 'Currency Edit', 1),
(318, 101, 'Finance', 'currency_rate_setup.list', 'Currency Rate Setup List', 1),
(319, 101, 'Finance', 'currency_rate_setup.add', 'Currency Rate Setup Add', 1),
(320, 101, 'Finance', 'currency_rate_setup.edit', 'Currency Rate Setup Edit', 1),
(321, 102, 'Finance', 'credit_note_type.list', 'Credit Note Type', 1),
(322, 102, 'Finance', 'credit_note_type.add', 'Credit Note Add', 1),
(323, 102, 'Finance', 'credit_note_type.edit', 'Credit Note Edit', 1),
(324, 103, 'Finance', 'fee_structure_activity.list', 'Fee Structure Activity List', 1),
(325, 103, 'Finance', 'fee_structure_activity.add', 'Fee Structure Activity Add', 1),
(326, 103, 'Finance', 'fee_structure_activity.edit', 'Fee Structure Activity Edit', 1),
(327, 104, 'Finance', 'account_code.list', 'Account Code List', 1),
(328, 104, 'Finance', 'account_code.add', 'Account Code Add', 1),
(329, 104, 'Finance', 'account_code.edit', 'Account Code Edit', 1),
(330, 105, 'Finance', 'bank_registration.list', 'Bank Registration List', 1),
(331, 105, 'Finance', 'bank_registration.add', 'Bank Registration Add', 1),
(332, 105, 'Finance', 'bank_registration.edit', 'Bank Registration Edit', 1),
(333, 106, 'Finance', 'amount_calculation_type.list', 'Amount Calculation Type List', 1),
(334, 106, 'Finance', 'amount_calculation_type.add', 'Amount Calculation Type Add', 1),
(335, 106, 'Finance', 'amount_calculation_type.edit', 'Amount Calculation Type Edit', 1),
(336, 107, 'Finance', 'frequency_mode.list', 'Frequency Mode List', 1),
(337, 107, 'Finance', 'frequency_mode.add', 'Frequency Mode Add', 1),
(338, 107, 'Finance', 'frequency_mode.edit', 'Frequency Mode Edit', 1),
(339, 108, 'Finance', 'payment_type.list', 'Payment Type List', 1),
(340, 108, 'Finance', 'payment_type.add', 'Payment Type Add', 1),
(341, 108, 'Finance', 'payment_type.edit', 'Payment Type Edit', 1),
(342, 109, 'Finance', 'fee_category.list', 'Fee Category List', 1),
(343, 109, 'Finance', 'fee_category.add', 'Fee Category Add', 1),
(344, 109, 'Finance', 'fee_category.edit', 'Fee Category Edit', 1),
(345, 110, 'Finance', 'fee_setup.list', 'Fee Setup List', 1),
(346, 110, 'Finance', 'fee_setup.add', 'Fee Setup Add', 1),
(347, 110, 'Finance', 'fee_setup.edit', 'Fee Setup Edit', 1),
(348, 111, 'Finance', 'fee_structure.programme_list', 'Fee Structure Program List', 1),
(349, 111, 'Finance', 'fee_structure.programme_landscape_list', 'Fee Structure Program Landscape List', 1),
(350, 111, 'Finance', 'fee_structure.add', 'Fee Structure Add', 1),
(351, 112, 'Finance', 'partne_university_fee.list', 'Partner University Fee List', 1),
(352, 112, 'Finance', 'partne_university_fee.add', 'Partner University Fee Add', 1),
(353, 112, 'Finance', 'partne_university_fee.edit', 'Partner University Fee Edit', 1),
(354, 113, 'Finance', 'sibbling_discount.list', 'Sibbling Discount List', 1),
(355, 113, 'Finance', 'sibbling_discount.add', 'Sibbling Discount Add', 1),
(356, 113, 'Finance', 'sibbling_discount.edit', 'Sibbling Discount Edit', 1),
(357, 114, 'Finance', 'employee_discount.list', 'Employee Discount List', 1),
(358, 114, 'Finance', 'employee_discount.add', 'Employee Discount Add', 1),
(359, 114, 'Finance', 'employee_discount.edit', 'Employee Discount Edit', 1),
(360, 115, 'Finance', 'alumni_discount.list', 'Alumni Discount List', 1),
(361, 115, 'Finance', 'alumni_discount.add', 'Alumni Discount Add', 1),
(362, 115, 'Finance', 'alumni_discount.edit', 'Alumni Discount Edit', 1),
(363, 116, 'Finance', 'statement_of_account.list', 'Statement Of Accounts List', 1),
(364, 116, 'Finance', 'statement_of_account.add', 'Statement Of Accounts Add', 1),
(365, 119, 'Finance', 'main_invoice.list', 'Invoice Generation List', 1),
(366, 117, 'Finance', 'main_invoice.add', 'Add Invoice', 1),
(367, 117, 'Finance', 'main_invoice.view', 'View Invoice', 1),
(368, 118, 'Finance', 'main_invoice.cancel_invoice', 'Cancel Wrong Invoice List', 1),
(369, 118, 'Finance', 'main_invoice.cancel', 'Cancel Wrong Invoice Generated', 1),
(370, 119, 'Finance', 'partner_university_invoice.list', 'Partner University Invoice List', 1),
(371, 119, 'Finance', 'partner_university_invoice.add', 'Partner University Invoice Add', 1),
(372, 119, 'Finance', 'partner_university_invoice.view', 'Partner University Invoice View', 1),
(373, 120, 'Finance', 'receipt.list', 'Receipt List', 1),
(374, 120, 'Finance', 'receipt.add', 'Receipt Add', 1),
(375, 120, 'Finance', 'receipt.view', 'Receipt View', 1),
(376, 121, 'Finance', 'receipt.approval_list', 'Receipt Approval List', 1),
(377, 121, 'Finance', 'receipt.approve', 'Receipt Approve', 1),
(378, 122, 'Finance', 'sponser_main_invoice.list', 'Sponsor Invoice List', 1),
(379, 122, 'Finance', 'sponser_main_invoice.add', 'Sponsor Invoice Add', 1),
(380, 122, 'Finance', 'sponser_main_invoice.view', 'Sponsor Invoice View', 1),
(381, 123, 'Finance', 'sponser_main_invoice.cancel_list', 'Sponsor Invoice Cancellation List', 1),
(382, 123, 'Finance', 'sponser_main_invoice.cancel', 'Sponser Invoice Cancellation  ', 1),
(383, 124, 'Finance', 'advance_payment.list', 'Advance Payment List', 1),
(384, 124, 'Finance', 'advance_payment.add', 'Advance Payment Add', 1),
(385, 124, 'Finance', 'advance_payment.view', 'Advance Payment View', 1),
(386, 124, 'Finance', 'advance_payment.approval_list', 'Advance Payment Approval List', 1),
(387, 124, 'Finance', 'advance_payment.approva', 'Advance Payment Approve', 1),
(388, 125, 'Finance', 'credit_note.list', 'Credit Note Entry List', 1),
(389, 125, 'Finance', 'credit_note.add', 'Credit Note Add', 1),
(390, 125, 'Finance', 'credit_note.view', 'Credit Note View', 1),
(391, 125, 'Finance', 'credit_note.approval_list', 'Credit Note Approval List', 1),
(392, 124, 'Finance', 'credit_note.approve', 'Credit Note Approve', 1),
(393, 126, 'Finance', 'debit_note.list', 'Debit Note List', 1),
(394, 126, 'Finance', 'debit_note.add', 'Debit Note Add', 1),
(395, 126, 'Finance', 'debit_note.view', 'Debit Note View', 1),
(396, 126, 'Finance', 'debit_note.approval_list', 'Debit Note Approval List', 1),
(397, 126, 'Finance', 'debit_note.approve', 'Debit Note Approve', 1),
(398, 127, 'Finance', 'refund_entry.list', 'Refund Entry List', 1),
(399, 127, 'Finance', 'refund_entry.add', 'Refund Entry Add', 1),
(400, 127, 'Finance', 'refund_entry.view', 'Refund Entry View', 1),
(401, 127, 'Finance', 'refund_entry.approval_list', 'Refund Entry Approval List', 1),
(402, 127, 'Finance', 'refund_entry.approve', 'Refund Entry Approve', 1),
(403, 128, 'Sponsor', 'sponser.list', 'Sponsor List', 1),
(404, 128, 'Sponsor', 'sponser.add', 'Sponsor Add', 1),
(405, 128, 'Sponsor', 'sponser.edit', 'Sponsor Edit', 1),
(406, 129, 'Sponsor', 'sponser_has_students.sponser_list', 'Sponsor Has Students List', 1),
(407, 129, 'Sponsor', 'sponser_has_students.add', 'Sponsor Has Students Add', 1),
(408, 130, 'Hostel', 'room_type.list', 'Room Type List', 1),
(409, 130, 'Hostel', 'room_type.add', 'Room Type Add', 1),
(410, 130, 'Hostel', 'room_type.edit', 'Room Type Edit', 1),
(411, 131, 'Hostel', 'hostel_inventory.list', 'Hostel Inventory List', 1),
(412, 131, 'Hostel', 'hostel_inventory.add', 'Hostel Inventory Add', 1),
(413, 131, 'Hostel', 'hostel_inventory.edit', 'Hostel Inventory Edit', 1),
(414, 132, 'Hostel', 'hostel_registration.list', 'Hostel Registration List', 1),
(415, 132, 'Hostel', 'hostel_registration.add', 'Hostel Registration Add', 1),
(416, 132, 'Hostel', 'hostel_registration.edit', 'Hostel Registration Edit', 1),
(417, 133, 'Hostel', 'building_setup.list', 'Apartment Setup List', 1),
(418, 133, 'Hostel', 'building_setup.add', 'Apartment Setup Add', 1),
(419, 133, 'Hostel', 'building_setup.edit', 'Apartment Setup Edit', 1),
(420, 134, 'Hostel', 'block_setup.list', 'Unit Setup List', 1),
(421, 134, 'Hostel', 'block_setup.add', 'Unit Setup Add', 1),
(422, 134, 'Hostel', 'block_setup.edit', 'Unit Setup Edit', 1),
(423, 135, 'Hostel', 'room_setup.list', 'Hostel Room Setup List', 1),
(424, 135, 'Hostel', 'room_setup.add', 'Hostel Room Setup Add', 1),
(425, 135, 'Hostel', 'room_setup.edit', 'Hostel Room Setup Edit', 1),
(426, 136, 'Hostel', 'room_allotment.list', 'Room Allotment List', 1),
(427, 136, 'Hostel', 'room_allotment.add', 'Room Allotment Add', 1),
(428, 136, 'Hostel', 'room_allotment.edit', 'Room Allotment Edit', 1),
(429, 137, 'Hostel', 'room_allotment.summary_list', 'Room Allotment Summary List', 1),
(430, 137, 'Hostel', 'room_allotment.summary_view', 'Room Allotment Summary View', 1),
(431, 138, 'Hostel', 'room_vacancy.list', 'Room Vacancy List', 1),
(432, 138, 'Hostel', 'room_vacancy.allot_room', 'Room Vacancy Allot Room', 1),
(433, 138, 'Hostel', 'room_vacancy.view', 'Room Vacancy View', 1),
(434, 139, 'Facility', 'equipment.list', 'Equipments List', 1),
(435, 139, 'Facility', 'equipment.add', 'Equipments Add', 1),
(436, 139, 'Facility', 'equipment.edit', 'Equipments Edit', 1),
(437, 140, 'Facility', 'facility_room_type.list', 'Facility Room Type List', 1),
(438, 140, 'Facility', 'facility_room_type.add', 'Facility Room Type Add', 1),
(439, 140, 'Facility', 'facility_room_type.edit', 'Facility Room Type Edit', 1),
(440, 141, 'Facility', 'facility_building_registration.list', 'Facility Building List', 1),
(441, 141, 'Facility', 'facility_building_registration.add', 'Facility Building Add', 1),
(442, 141, 'Facility', 'facility_building_registration.edit', 'Facility Building Edit', 1),
(443, 142, 'Facility', 'facility_room_setup.list', 'Facility Room Setup List', 1),
(444, 142, 'Facility', 'facility_room_setup.add', 'Facility Room Setup Add', 1),
(445, 142, 'Facility', 'facility_room_setup.edit', 'Facility Room Setup Edit', 1),
(446, 143, 'Facility', 'room_booking.list', 'Apply For Booking List', 1),
(447, 143, 'Facility', 'room_booking.book_room', 'Room Booking Add', 1),
(448, 144, 'Facility', 'room_booking.summary_list', 'Room Booking Summary List', 1),
(449, 144, 'Facility', 'room_booking.view', 'View Room Booking', 1),
(450, 145, 'Internship', 'internship_limit.edit', 'Max. Internship Limit Per Student Edit', 1),
(451, 146, 'Internship', 'company_type.list', 'Internship Company Type List', 1),
(452, 146, 'Internship', 'company_type.add', 'Internship Company Type Add', 1),
(453, 146, 'Internship', 'company_type.edit', 'Internship Company Type Edit', 1),
(454, 147, 'Internship', 'internship_company_registration.list', 'Intrernship Company Registration List', 1),
(455, 147, 'Internship', 'internship_company_registration.add', 'Internship Company Registration Add', 1),
(456, 147, 'Internship', 'internship_company_registration.edit', 'Internship Company Registration Edit', 1),
(457, 148, 'Internship', 'internship_application.list', 'Internship Application List', 1),
(458, 148, 'Internship', 'internship_application.view', 'Internship Application View', 1),
(459, 149, 'Internship', 'internship_application.approval_list', 'Internship Application Approval List', 1),
(460, 149, 'Internship', 'internship_application.approve', 'Internship Application Approve', 1),
(461, 150, 'Internship', 'internship_application.reporting', 'Reporting List', 1),
(462, 150, 'Internship', 'internship_application.reporting_view', 'Reporting View', 1),
(463, 151, 'Internship', 'placement_form.list', 'Placement Form List', 1),
(464, 151, 'Internship', 'placement_form.add', 'Placement Form Add', 1),
(465, 151, 'Internship', 'placement_form.view', 'Placement Form VIew', 1),
(466, 152, 'Alumni', 'allumini.list', 'Allumini List', 1),
(467, 152, 'Alumni', 'allumini.view', 'Alumni View', 1),
(468, 153, 'Communication', 'email_template.list', 'Communication Email Templates List', 1),
(469, 153, 'Communication', 'email_template.add', 'Communication Email Templates Add', 1),
(470, 153, 'Communication', 'email_template.edit', 'Communication Email Templates Edit', 1),
(471, 154, 'Communication', 'email_communication_group.list', 'Communication Email Group List', 1),
(472, 154, 'Communication', 'email_communication_group.add', 'Communication Email Group Add', 1),
(473, 154, 'Communication', 'email_communication_group.edit', 'Communication Email Group Edit', 1),
(474, 155, 'Communication', 'email_communication_group.recepients_list', 'Communication Email Group Recepients List', 1),
(475, 155, 'Communication', 'email_communication_group.add_recepients', 'Communication Email Group Recepients Add', 1),
(476, 156, 'Communication', 'template_message.list', 'Communication Messaging Template List', 1),
(477, 156, 'Communication', 'template_message.add', 'Communication Messaging Template Add', 1),
(478, 156, 'Communication', 'template_message.edit', 'Communication Messaging Template Edit', 1),
(479, 157, 'Communication', 'communication_message_group.list', 'Communication Messaging Group List', 1),
(480, 157, 'Communication', 'communication_message_group.add', 'Communication Messaging Group Add', 1),
(481, 157, 'Communication', 'communication_message_group.edit', 'Communication Messaging Group Edit', 1),
(482, 158, 'Communication', 'communication_message_group.recepients_list', 'Communication Message Group Recepients List', 1),
(483, 155, 'Communication', 'email_communication_group.view', 'Communication Email Group Recepients View', 1),
(484, 158, 'Communication', 'communication_message_group.add_recepients', 'Communication Message Group Recepients Add', 1),
(485, 158, 'Communication', 'communication_message_group.view', 'Communication Message Group Recepients View', 1),
(486, 159, 'IPS', 'topic.list', 'Research Topic List', 1),
(487, 159, 'IPS', 'topic.add', 'Research Topic Add', 1),
(488, 159, 'IPS', 'topic.edit', 'Research Topic Edit', 1),
(489, 160, 'IPS', 'research_status.list', 'Research Status List', 1),
(490, 160, 'IPS', 'research_status.add', 'Research Status Add', 1),
(491, 160, 'IPS', 'research_status.edit', 'Research Status Edit', 1),
(492, 161, 'IPS', 'research_fieldofinterest.list', 'Research Field Of Interest List', 1),
(493, 161, 'IPS', 'research_fieldofinterest.add', 'Research Field Of Interest Add', 1),
(494, 161, 'IPS', 'research_fieldofinterest.edit', 'Research Field Of Interest Edit', 1),
(495, 162, 'IPS', 'research_reason_applying.list', 'Reason For Applying List', 1),
(496, 162, 'IPS', 'research_reason_applying.add', 'Reason For Applying Add', 1),
(497, 162, 'IPS', 'research_reason_applying.edit', 'Reason For Applying Edit', 1),
(498, 163, 'IPS', 'research_category.list', 'Research Category List', 1),
(499, 163, 'IPS', 'research_category.add', 'Research Category Add', 1),
(500, 163, 'IPS', 'research_category.edit', 'Research Category Edit', 1),
(501, 164, 'IPS', 'research_colloquium.list', 'Colloquium Setup List', 1),
(502, 164, 'IPS', 'research_colloquium.add', 'Colloquium Setup Add', 1),
(503, 164, 'IPS', 'research_colloquium.edit', 'Colloquium Setup Edit', 1),
(504, 165, 'IPS', 'research_advisory.list', 'Research Advisory List', 1),
(505, 165, 'IPS', 'research_advisory.add', 'Research Advisory Add', 1),
(506, 165, 'IPS', 'research_advisory.edit', 'Research Advisory Edit', 1),
(507, 166, 'IPS', 'research_readers.list', 'Research Readers List', 1),
(508, 166, 'IPS', 'research_readers.add', 'Research Readers Add', 1),
(509, 166, 'IPS', 'research_readers.edit', 'Research Readers Edit', 1),
(510, 167, 'IPS', 'research_comitee.list', 'Research Proposal Defense Comitee List', 1),
(511, 167, 'IPS', 'research_comitee.add', 'Research Proposal Defense Comitee Add', 1),
(512, 167, 'IPS', 'research_comitee.edit', 'Research Proposal Defense Comitee Edit', 1),
(513, 168, 'IPS', 'research_chapter.list', 'Research Chapter List', 1),
(514, 168, 'IPS', 'research_chapter.add', 'Research Chapter Add', 1),
(515, 168, 'IPS', 'research_chapter.edit', 'Research Chapter Edit', 1),
(516, 169, 'IPS', 'research_deliverables.list', 'Research Deliverables Setup List', 1),
(517, 169, 'IPS', 'research_deliverables.add', 'Research Deliverables Setup Add', 1),
(518, 169, 'IPS', 'research_deliverables.edit', 'Research Deliverables Setup Edit', 1),
(519, 170, 'IPS', 'submitted_deliverables.list', 'Research Submitted Deliverables Application List', 1),
(520, 170, 'IPS', 'submitted_deliverables.add', 'Research Submitted Deliverables Application Add', 1),
(521, 170, 'IPS', 'submitted_deliverables.approve', 'Research Submitted Deliverables Application Approve', 1),
(522, 170, 'IPS', 'submitted_deliverables.view', 'Research Submitted Deliverables Application View', 1),
(523, 171, 'IPS', 'student_duration_tagging.edit', 'Student Duration Tagging Edit', 1),
(524, 172, 'IPS', 'research_stage.list', 'Research Stage List', 1),
(525, 172, 'IPS', 'research_stage.add', 'Research Stage Add', 1),
(526, 172, 'IPS', 'research_stage.edit', 'Research Stage Edit', 1),
(527, 172, 'IPS', 'research_stage.add_semester', 'Research Stage Add Semester', 1),
(528, 173, 'IPS', 'research_mile_stone.list', 'Research Milestone List', 1),
(529, 173, 'IPS', 'research_mile_stone.add', 'Research Mile Stone Add', 1),
(530, 173, 'IPS', 'research_mile_stone.edit', 'Research Mile Stone Edit', 1),
(531, 174, 'IPS', 'mile_stone_semester.list', 'Tag Mile Stone To Semester List', 1),
(532, 174, 'IPS', 'mile_stone_semester.add', 'Tag Mile Stone To Semester Add', 1),
(533, 174, 'IPS', 'mile_stone_semester.edit', 'Tag Mile Stone To Semester Edit', 1),
(534, 175, 'IPS', 'research_stage.overview', 'Research Stages Overwiew', 1),
(535, 176, 'IPS', 'research_supervisor_role.list', 'Research Supervisor Role List', 1),
(536, 176, 'IPS', 'research_supervisor_role.add', 'Research Supervisor Role Add', 1),
(537, 176, 'IPS', 'research_supervisor_role.edit', 'Research Supervisor Role Edit', 1),
(538, 177, 'IPS', 'research_supervisor.list', 'Research Supervisor List', 1),
(539, 177, 'IPS', 'research_supervisor.add', 'Research Supervisor Add', 1),
(540, 177, 'IPS', 'research_supervisor.edit', 'Research Supervisor Edit', 1),
(541, 178, 'IPS', 'research_supervisor_tagging.add', 'Research Supervisor Tagging Add / Edit', 1),
(542, 179, 'IPS', 'research_examiner_role.list', 'Research Examiner Role List', 1),
(543, 179, 'IPS', 'research_examiner_role.add', 'Research Examiner Role Add', 1),
(544, 179, 'IPS', 'research_examiner_role.edit', 'Research Examiner Role Edit', 1),
(545, 180, 'IPS', 'research_examiner.list', 'Research Examiner List', 1),
(546, 180, 'IPS', 'research_examiner.add', 'Research Examiner Add', 1),
(547, 180, 'IPS', 'research_examiner.edit', 'Research Examiner Edit', 1),
(548, 181, 'IPS', 'research_proposal.list', 'Research Proposal List', 1),
(549, 181, 'IPS', 'research_proposal.add', 'Research Proposal Add', 1),
(550, 181, 'IPS', 'research_proposal.view', 'Research Proposal View', 1),
(551, 182, 'IPS', 'research_articleship.list', 'Research Articleship', 1),
(552, 182, 'IPS', 'research_articleship.add', 'Research Articleship Add', 1),
(553, 182, 'IPS', 'research_articleship.view', 'Research Articleship View', 1),
(554, 181, 'IPS', 'research_proposal.edit', 'Research Proposal Edit', 1),
(555, 182, 'IPS', 'research_articleship.edit', 'Research Articleship Edit', 1),
(556, 183, 'IPS', 'research_professionalpracricepaper.list', 'Research Professional Practice Paper List', 1),
(557, 183, 'IPS', 'research_professionalpracricepaper.add', 'Research Professional Practice Paper Add', 1),
(558, 183, 'IPS', 'research_professionalpracricepaper.edit', 'Research Professional Practice Paper Edit', 1),
(559, 183, 'IPS', 'research_professionalpracricepaper.view', 'Research Professional Practice Paper View', 1),
(560, 184, 'IPS', 'research_proposal.approval_list', 'Research Proposal Approval List', 1),
(561, 184, 'IPS', 'research_proposal.approve', 'Research Proposal Approve', 1),
(562, 185, 'IPS', 'research_articleship.approval_list', 'Research Articleship Approval List', 1),
(563, 185, 'IPS', 'research_articleship.approve', 'Research Articleship Approve', 1),
(564, 186, 'IPS', 'research_professionalpracricepaper.approval_list', 'Research Professional Practice Paper Approval List', 1),
(565, 186, 'IPS', 'research_professionalpracricepaper.approve', 'Research Professional Practice Paper Approve', 1),
(566, 188, 'IPS', 'research_supervisor_change_application.list', 'Change Supervisor Applicaton List', 1),
(567, 188, 'IPS', 'research_supervisor_change_application.approve', 'Change Supervisor Application Approve', 1),
(568, 188, 'IPS', 'research_supervisor_change_application.view', 'Change Supervisor Application View', 1),
(569, 189, 'Examination', 'ips_progress.student_list', 'IPS Progress Student List', 1),
(570, 189, 'Examination', 'ips_progress.add', 'IPS Progress Add', 1),
(571, 111, 'Finance', 'fee_structure.copy_fee_structure', 'Copy Existing Fee Structure', 1),
(572, 31, 'Setup', 'programme_landscape.addcourse', 'Programme Landscape Add Course', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reset_user_password`
--

CREATE TABLE `reset_user_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` bigint(20) NOT NULL DEFAULT '1',
  `created_dt_tm` datetime NOT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_dtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint(20) NOT NULL,
  `id_role` bigint(20) DEFAULT NULL,
  `id_permission` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salutation_setup`
--

CREATE TABLE `salutation_setup` (
  `id` int(20) NOT NULL,
  `name` varchar(250) DEFAULT '',
  `sequence` int(20) DEFAULT '0',
  `status` int(2) DEFAULT NULL,
  `created_by` int(20) DEFAULT NULL,
  `created_dt_tm` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(20) DEFAULT NULL,
  `updated_dt_tm` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `id_role` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_dt_tm` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_dt_tm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `mobile`, `id_role`, `is_deleted`, `created_by`, `created_dt_tm`, `updated_by`, `updated_dt_tm`) VALUES
(1, 'admin@gmail.com', '$2y$10$YykrXgnhZ563BCiC6L2ee.Kktd/Vj/KncTnTeDZQXCWwAQ1xH4Req', 'Administrator', '9890098901', 1, 0, 0, '2015-07-01 18:56:49', 1, '2020-01-30 01:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_last_login`
--

CREATE TABLE `user_last_login` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `created_dt_tm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`) VALUES
(1, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_user_password`
--
ALTER TABLE `reset_user_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salutation_setup`
--
ALTER TABLE `salutation_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_last_login`
--
ALTER TABLE `user_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=573;
--
-- AUTO_INCREMENT for table `reset_user_password`
--
ALTER TABLE `reset_user_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salutation_setup`
--
ALTER TABLE `salutation_setup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_last_login`
--
ALTER TABLE `user_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
