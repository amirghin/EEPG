INSERT INTO `nutrivital`.`roles` (`roles_id`, `roles_nombre`, `roles_descripcion`) VALUES ('1', 'nutricionista', 'Nutricionista - Full Acceso');
INSERT INTO `nutrivital`.`roles` (`roles_id`, `roles_nombre`, `roles_descripcion`) VALUES ('2', 'paciente', 'Paciente - Acceso solo a Controles');
INSERT INTO `nutrivital`.`usuarios` (`usuarios_nombre`, `usuarios_email`, `usuarios_password`, `roles_id`) VALUES ('nutri', 'nutri@nutri.com', '$2y$11$Z3MxI/oetz8Da4hfQ5KT..x4QNE819z2/EFqi9ArbszgJqC.n9.G.', '1');
INSERT INTO `nutrivital`.`usuarios` (`usuarios_nombre`, `usuarios_email`, `usuarios_password`, `roles_id`) VALUES ('pac', 'pac@nutri.com', '$2y$11$Z3MxI/oetz8Da4hfQ5KT..x4QNE819z2/EFqi9ArbszgJqC.n9.G.', '2');