<?php
$animal = (string) "";

$resposta = (string) readline("É mamífero? (sim/nao): ");
$ehMamifero = (bool) ($resposta === "sim");

if ($ehMamifero) {
    $resposta = (string) readline("É quadrúpede? (sim/nao): ");
    $ehQuadrupede = (bool) ($resposta === "sim");

    if ($ehQuadrupede) {
        $resposta = (string) readline("É carnívoro? (sim/nao): ");
        $ehCarnivoro = (bool) ($resposta === "sim");

        if ($ehCarnivoro) {
            $animal = (string) "leão";
        } else {
            $resposta = (string) readline("É herbívoro? (sim/nao): ");
            $ehHerbivoro = (bool) ($resposta === "sim");

            if ($ehHerbivoro) {
                $animal = (string) "cavalo";
            }
        }
    } else {
        $resposta = (string) readline("É bípede? (sim/nao): ");
        $ehBipede = (bool) ($resposta === "sim");

        if ($ehBipede) {
            $resposta = (string) readline("É onívoro? (sim/nao): ");
            $ehOnivoro = (bool) ($resposta === "sim");

            if ($ehOnivoro) {
                $animal = (string) "homem";
            } else {
                $resposta = (string) readline("É frutívoro? (sim/nao): ");
                $ehFrutivoro = (bool) ($resposta === "sim");

                if ($ehFrutivoro) {
                    $animal = (string) "macaco";
                }
            }
        } else {
            $resposta = (string) readline("É voador? (sim/nao): ");
            $ehVoador = (bool) ($resposta === "sim");

            if ($ehVoador) {
                $animal = (string) "morcego";
            } else {
                $resposta = (string) readline("É aquático? (sim/nao): ");
                $ehAquatico = (bool) ($resposta === "sim");

                if ($ehAquatico) {
                    $animal = (string) "baleia";
                }
            }
        }
    }
} else {
    $resposta = (string) readline("É ave? (sim/nao): ");
    $ehAve = (bool) ($resposta === "sim");

    if ($ehAve) {
        $resposta = (string) readline("É não voadora? (sim/nao): ");
        $ehNaoVoadora = (bool) ($resposta === "sim");

        if ($ehNaoVoadora) {
            $resposta = (string) readline("É tropical? (sim/nao): ");
            $ehTropical = (bool) ($resposta === "sim");

            if ($ehTropical) {
                $animal = (string) "avestruz";
            } else {
                $resposta = (string) readline("É polar? (sim/nao): ");
                $ehPolar = (bool) ($resposta === "sim");

                if ($ehPolar) {
                    $animal = (string) "pinguim";
                }
            }
        } else {
            $resposta = (string) readline("É nadadora? (sim/nao): ");
            $ehNadadora = (bool) ($resposta === "sim");

            if ($ehNadadora) {
                $animal = (string) "pato";
            } else {
                $resposta = (string) readline("É de rapina? (sim/nao): ");
                $ehDeRapina = (bool) ($resposta === "sim");

                if ($ehDeRapina) {
                    $animal = (string) "águia";
                }
            }
        }
    } else {
        $resposta = (string) readline("É réptil? (sim/nao): ");
        $ehReptil = (bool) ($resposta === "sim");

        if ($ehReptil) {
            $resposta = (string) readline("Tem casco? (sim/nao): ");
            $temCasco = (bool) ($resposta === "sim");

            if ($temCasco) {
                $animal = (string) "tartaruga";
            } else {
                $resposta = (string) readline("É carnívoro? (sim/nao): ");
                $ehCarnivoro = (bool) ($resposta === "sim");

                if ($ehCarnivoro) {
                    $animal = (string) "crocodilo";
                } else {
                    $resposta = (string) readline("É sem patas? (sim/nao): ");
                    $ehSemPatas = (bool) ($resposta === "sim");

                    if ($ehSemPatas) {
                        $animal = (string) "cobra";
                    }
                }
            }
        }
    }
}

if ($animal === "") {
    echo "Animal não identificado.\n";
} else {
    echo "Então o animal escolhido foi " . $animal . ".\n";
}
?>