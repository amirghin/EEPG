CREATE USER sys_nutrivital@localhost IDENTIFIED BY 'nutrivital';
GRANT DELETE ON nutrivital.* TO sys_nutrivital@localhost;
GRANT SELECT ON nutrivital.* TO sys_nutrivital@localhost;
GRANT INSERT ON nutrivital.* TO sys_nutrivital@localhost;
GRANT UPDATE ON nutrivital.* TO sys_nutrivital@localhost;
FLUSH PRIVILEGES;