# 📸 Galeria de Evidências

Capturas de tela das etapas do desafio técnico realizadas no ambiente Kali Linux + Metasploitable 2 / DVWA.

| Arquivo | Descrição |
|---|---|
| [`01-nmap-recon.png`](01-nmap-recon.png) | Varredura de portas e enumeração de serviços com Nmap |
| [`02-medusa-ftp.png`](02-medusa-ftp.png) | Ataque de força bruta no serviço FTP (porta 21) com Medusa |
| [`03-medusa-dvwa-http.png`](03-medusa-dvwa-http.png) | Força bruta no formulário HTTP do DVWA (`/dvwa/login.php`) |
| [`04-medusa-smb-spray.png`](04-medusa-smb-spray.png) | Password spraying contra o serviço Samba/SMB (portas 139/445) |
| [`05-dvwa-sqli.png`](05-dvwa-sqli.png) | Exploração de SQL Injection no DVWA extraindo registros |
| [`06-dvwa-command-injection-passwd.png`](06-dvwa-command-injection-passwd.png) | OS Command Injection obtendo o arquivo `/etc/passwd` |
| [`07-dvwa-whoami-www-data.png`](07-dvwa-whoami-www-data.png) | Execução de comando confirmando usuário do serviço (`www-data`) |
| [`08-mysql-show-databases.png`](08-mysql-show-databases.png) | Conexão local no MySQL como `root` e listagem de bancos |
| [`09-mysql-dump-users-hashes.png`](09-mysql-dump-users-hashes.png) | Extração completa da tabela `dvwa.users` com hashes MD5 |
| [`10-password-hashes-offline.png`](10-password-hashes-offline.png) | Hashes salvos em `hashes.txt` prontos para cracking |
| [`11-mysql-root-guest-null-passwords.png`](11-mysql-root-guest-null-passwords.png) | Análise de contas de banco com credenciais nulas |
| [`12-netcat-reverse-shell.png`](12-netcat-reverse-shell.png) | Shell reverso interativo estabelecido via Netcat (`www-data`) |
| [`13-suid-privesc-recon.png`](13-suid-privesc-recon.png) | Enumeração de binários SUID (`find / -perm -4000`) |
| [`14-nmap-suid-privesc-root.png`](14-nmap-suid-privesc-root.png) | Escalação para ROOT usando o modo interativo do Nmap (`!sh`) |
| [`15-etc-shadow-dump-root.png`](15-etc-shadow-dump-root.png) | Comprometimento total do sistema: dump do `/etc/shadow` |
