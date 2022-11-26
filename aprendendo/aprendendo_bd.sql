

CREATE TABLE `aluno` (
  `aluno_id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nota` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `aluno`
  ADD UNIQUE KEY `aluno_id` (`aluno_id`);

ALTER TABLE `aluno`
  MODIFY `aluno_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;


