<?php

namespace App\str\Models\helper;

// if(!defined('KLKSK8')){
//     $urlRedirect = "http://localhost/kwservice/adm/login/index";
//     header("Location: $urlRedirect");
//     die("Erro: Página não encontrada!<br>");
// }


/**
 * Classe genérica para validar a senha
 * 
 * @author Franklin (" KLYK ") <frsbatist@gmail.com>
 */
class StrValPassword
{
    /** @var string $password Recebe a senha que deve ser validada*/
    private string $password;

    private bool $result;

    function getResult(): bool
    {
        return $this->result;
    }

    public function validatePassword(string $password): void
    {
        $this->password = $password;

        if (stristr($this->password, "'")) {
            $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Caractere ( ' ) utilizado na senha é invalido!</p>";
            $this->result = false;
        } else {
            if (stristr($this->password, " ")) {
                $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Proibido utilizar espaço em branco no campo de senha!</p>";
                $this->result = false;
            } else {
                $this->valExtensPassword();
            }
        }
    }
    public function valExtensPassword(): void
    {
        if (strlen($this->password) < 6) {
            $_SESSION['msg'] = "<p style='color:#f00;'>Erro: A senha deve ter (NO MÍNIMO) 6 caracteres!</p>";
            $this->result = false;
        } else {
            $this->valValuePassword();
        }
    }

    private function valValuePassword(): void
    {
        if (preg_match('/^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9-@#$%;*]{6,}$/', $this->password)) {
            $this->result = true;
        } else {
            $_SESSION['msg'] = "<p style='color:#f00;'>Erro: A senha deve conter letras e números ou carcteres como '@ # $ % ; *'!</p>";
            $this->result = false;
        }
    }
}
