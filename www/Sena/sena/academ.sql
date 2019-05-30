
--
--CREATE database academ;
-- Base de datos: `academ`


CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'Administrador', '', 'admin@gmail.com', '123456', 1),
(2, 'Prueba', '12345', 'Prueba@gmail.com', '', 2),
(4, 'Prueb', '12345', 'Prueb@gmail.com', '', 2),
(5, 'pre', '1234', 'pre@gmail.com', '', 2);



ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);


--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
