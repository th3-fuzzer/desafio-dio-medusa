# Wordlists para o Desafio

## users.txt
Lista de usuários comuns encontrados em sistemas Linux e aplicações web padrão.
Baseada na enumeração do `/etc/passwd` do Metasploitable 2.

## passwords.txt
Lista de senhas fracas comuns.
Em um teste real, seriam usadas wordlists maiores como:
- **rockyou.txt** — 14 milhões de senhas (~133 MB)
- **SecLists** — Coleção de listas para segurança

Localização no Kali Linux:
```
/usr/share/wordlists/rockyou.txt.gz
```

Para descompactar:
```bash
gunzip /usr/share/wordlists/rockyou.txt.gz
```
