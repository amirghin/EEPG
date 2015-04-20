CREATE USER sys_nutrivital@localhost IDENTIFIED BY 'nutrivital';
GRANT DELETE ON nutrivital.* TO sys_videoclub@localhost;
GRANT SELECT ON nutrivital.* TO sys_videoclub@localhost;
GRANT INSERT ON nutrivital.* TO sys_videoclub@localhost;
GRANT UPDATE ON nutrivital.* TO sys_videoclub@localhost;
FLUSH PRIVILEGES;