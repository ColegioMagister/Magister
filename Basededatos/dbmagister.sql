-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 06:21:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbmagister`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assessment`
--

CREATE TABLE `assessment` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `id_assessment_type` int(11) NOT NULL,
  `grade` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assessment_type`
--

CREATE TABLE `assessment_type` (
  `id` int(11) NOT NULL,
  `assessment_name` varchar(50) NOT NULL,
  `value` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `id_schedule` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `id_school` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `url_img` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotas`
--

CREATE TABLE `quotas` (
  `id` int(11) NOT NULL,
  `id_section` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `quota_number` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `id_section` int(11) NOT NULL,
  `id_weekday` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `school_info`
--

CREATE TABLE `school_info` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `tax_number` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `url_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `school_periods`
--

CREATE TABLE `school_periods` (
  `id` int(11) NOT NULL,
  `period_name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `id_sectiontype` int(11) NOT NULL,
  `id_period` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section_has_subjects`
--

CREATE TABLE `section_has_subjects` (
  `id` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `id_section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section_type`
--

CREATE TABLE `section_type` (
  `id` int(11) NOT NULL,
  `section_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `bithdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `dni` varchar(30) NOT NULL,
  `url_img` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_in_section`
--

CREATE TABLE `student_in_section` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_section` int(11) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_quota`
--

CREATE TABLE `student_quota` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_quota` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher_has_subjects`
--

CREATE TABLE `teacher_has_subjects` (
  `id` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher_in_sections`
--

CREATE TABLE `teacher_in_sections` (
  `id` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `weekdays`
--

CREATE TABLE `weekdays` (
  `id` int(11) NOT NULL,
  `day_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_a_id_student` (`id_student`),
  ADD KEY `fk_a_id_subject` (`id_subject`),
  ADD KEY `fk_a_id_typ_assess` (`id_assessment_type`);

--
-- Indices de la tabla `assessment_type`
--
ALTER TABLE `assessment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_at_id_student` (`id_student`),
  ADD KEY `fk_at_id_schedule` (`id_schedule`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_e_id_school` (`id_school`) USING BTREE;

--
-- Indices de la tabla `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quotas`
--
ALTER TABLE `quotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_in_id_section` (`id_section`);

--
-- Indices de la tabla `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sch_id_section` (`id_section`),
  ADD KEY `fk_sch_id_subject` (`id_subject`),
  ADD KEY `fk_sch_id_weekday` (`id_weekday`);

--
-- Indices de la tabla `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `school_periods`
--
ALTER TABLE `school_periods`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_s_id_level` (`id_level`),
  ADD KEY `fk_sec_id_tpsec` (`id_sectiontype`),
  ADD KEY `fk_sec_id_period` (`id_period`);

--
-- Indices de la tabla `section_has_subjects`
--
ALTER TABLE `section_has_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_secs_id_section` (`id_section`),
  ADD KEY `fk_secs_id_subject` (`id_subject`);

--
-- Indices de la tabla `section_type`
--
ALTER TABLE `section_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student_in_section`
--
ALTER TABLE `student_in_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_stus_id_section` (`id_section`),
  ADD KEY `fk_stus_id_student` (`id_student`);

--
-- Indices de la tabla `student_quota`
--
ALTER TABLE `student_quota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_stuq_id_quota` (`id_quota`),
  ADD KEY `fk_stuq_id_student` (`id_student`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teacher_has_subjects`
--
ALTER TABLE `teacher_has_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ts_id_subject` (`id_subject`),
  ADD KEY `fk_ts_id_teacher` (`id_teacher`);

--
-- Indices de la tabla `teacher_in_sections`
--
ALTER TABLE `teacher_in_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_teas_id_teacher` (`id_teacher`),
  ADD KEY `fk_teas_id_section` (`id_section`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_u_id_employee` (`id_employee`),
  ADD KEY `fk_u_id_role` (`id_role`);

--
-- Indices de la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `weekdays`
--
ALTER TABLE `weekdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `assessment_type`
--
ALTER TABLE `assessment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `quotas`
--
ALTER TABLE `quotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `school_info`
--
ALTER TABLE `school_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `school_periods`
--
ALTER TABLE `school_periods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `section_has_subjects`
--
ALTER TABLE `section_has_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `section_type`
--
ALTER TABLE `section_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `student_in_section`
--
ALTER TABLE `student_in_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `student_quota`
--
ALTER TABLE `student_quota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teacher_has_subjects`
--
ALTER TABLE `teacher_has_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teacher_in_sections`
--
ALTER TABLE `teacher_in_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `weekdays`
--
ALTER TABLE `weekdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `assessment`
--
ALTER TABLE `assessment`
  ADD CONSTRAINT `fk_a_id_student` FOREIGN KEY (`id_student`) REFERENCES `student_in_section` (`id`),
  ADD CONSTRAINT `fk_a_id_subject` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `fk_a_id_typ_assess` FOREIGN KEY (`id_assessment_type`) REFERENCES `assessment_type` (`id`);

--
-- Filtros para la tabla `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `fk_at_id_schedule` FOREIGN KEY (`id_schedule`) REFERENCES `schedules` (`id`),
  ADD CONSTRAINT `fk_at_id_student` FOREIGN KEY (`id_student`) REFERENCES `student_in_section` (`id`);

--
-- Filtros para la tabla `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_u_id_school` FOREIGN KEY (`id_school`) REFERENCES `school_info` (`id`);

--
-- Filtros para la tabla `quotas`
--
ALTER TABLE `quotas`
  ADD CONSTRAINT `fk_in_id_section` FOREIGN KEY (`id_section`) REFERENCES `sections` (`id`);

--
-- Filtros para la tabla `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `fk_sch_id_section` FOREIGN KEY (`id_section`) REFERENCES `sections` (`id`),
  ADD CONSTRAINT `fk_sch_id_subject` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `fk_sch_id_weekday` FOREIGN KEY (`id_weekday`) REFERENCES `weekdays` (`id`);

--
-- Filtros para la tabla `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `fk_s_id_level` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `fk_sec_id_period` FOREIGN KEY (`id_period`) REFERENCES `school_periods` (`id`),
  ADD CONSTRAINT `fk_sec_id_tpsec` FOREIGN KEY (`id_sectiontype`) REFERENCES `section_type` (`id`);

--
-- Filtros para la tabla `section_has_subjects`
--
ALTER TABLE `section_has_subjects`
  ADD CONSTRAINT `fk_secs_id_section` FOREIGN KEY (`id_section`) REFERENCES `sections` (`id`),
  ADD CONSTRAINT `fk_secs_id_subject` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`);

--
-- Filtros para la tabla `student_in_section`
--
ALTER TABLE `student_in_section`
  ADD CONSTRAINT `fk_stus_id_section` FOREIGN KEY (`id_section`) REFERENCES `sections` (`id`),
  ADD CONSTRAINT `fk_stus_id_student` FOREIGN KEY (`id_student`) REFERENCES `student` (`id`);

--
-- Filtros para la tabla `student_quota`
--
ALTER TABLE `student_quota`
  ADD CONSTRAINT `fk_stuq_id_quota` FOREIGN KEY (`id_quota`) REFERENCES `quotas` (`id`),
  ADD CONSTRAINT `fk_stuq_id_student` FOREIGN KEY (`id_student`) REFERENCES `student_in_section` (`id`);

--
-- Filtros para la tabla `teacher_has_subjects`
--
ALTER TABLE `teacher_has_subjects`
  ADD CONSTRAINT `fk_ts_id_subject` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `fk_ts_id_teacher` FOREIGN KEY (`id_teacher`) REFERENCES `employees` (`id`);

--
-- Filtros para la tabla `teacher_in_sections`
--
ALTER TABLE `teacher_in_sections`
  ADD CONSTRAINT `fk_teas_id_section` FOREIGN KEY (`id_section`) REFERENCES `sections` (`id`),
  ADD CONSTRAINT `fk_teas_id_teacher` FOREIGN KEY (`id_teacher`) REFERENCES `employees` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_u_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `fk_u_id_role` FOREIGN KEY (`id_role`) REFERENCES `user_roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
