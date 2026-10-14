<?php

class Aluno {

    private string $nome;
    private float $idade;
    private string $curso;
    private bool $matriculado;
    private float $nota1;
    private float $nota2;
    private float $media;

    public function __construct(string $nome, float $idade, string $curso)
    {
       $this->nome = $nome;
       $this->idade = $idade;
       $this->curso = $curso;
       $this->matriculado = false;
       $this->nota1 = 0.0;
       $this->nota2 = 0.0;
       $this->media = 0.0;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getIdade(): float {
        return $this->idade;
    }

    public function setIdade(float $idade): void {
        $this->idade = $idade;
    }

    public function getCurso(): string {
        return $this->curso;
    }

    public function setCurso(string $curso): void {
        $this->curso = $curso;
    }

    public function getMatriculado(): bool {
        return $this->matriculado;
    }
 
    public function setMatriculado(bool $matriculado): void {
        $this->matriculado = $matriculado;
    }

    function matricular(): void {
        if (!$this->matriculado){
            $this->matriculado = true;
            echo "Aluno matriculado com sucesso!";
        } else {
            echo "Aluno já matriculado!";
        }
    }

    function cancelarMatricula(): void {
        if ($this->matriculado){
            $this->matriculado = false;
            echo "Matricula cancelada.";
        } else {
            echo "Aluno já está com matricula inativa.";
        }
    }

    function verificarMaiorIdade(): void {
        if($this->idade < 18) {
            echo "Aluno menor de idade, não pode participar de cursos noturnos.";
        } else {
            echo "Aluno maior de idade e pode participar de cursos noturnos";
        }
    }

    function setCadastrarNota1(float $nota1): void {
        $this->nota1 = $nota1;
        echo "A nota foi cadastrada.";
    }

    function setCadastrarNota2(float $nota2): void {
        $this->nota2 = $nota2;
        echo "A nota foi cadastrada.";
    }

    function cadastrarNotas(float $nota1, float $nota2): void {
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        echo "As notas foram cadastradas.";
    }

    function calcularMedia(): float {
        $this->media = ($this->nota1 + $this->nota2) / 2;
        return $this->media;
    }

    function verificarAprovacao(): void {
        $media = $this->calcularMedia();
        if ($media >= 7.0) {
            echo "Aprovado";
        } else {
            echo "Reprovado";
        }
    }

    function exibirInformacoes(): void {
        $statusMatricula = $this->matriculado ? "Ativa" : "Inativa";
        $media = $this->calcularMedia();

        echo "--- INFORMAÇÕES DO ALUNO ---\n";
        echo "Nome: {$this->nome}\n";
        echo "Idade: {$this->idade}\n";
        echo "Curso: {$this->curso}\n";
        echo "Matrícula: {$statusMatricula}\n";
        echo "Nota 1: {$this->nota1}\n";
        echo "Nota 2: {$this->nota2}\n"; 
        echo "Média: {$media}\n";
    }
}

$aluno1 = new Aluno("Maria", 20, "Sistemas de Informação");

$aluno1->matricular();
echo "\n";

$aluno1->cadastrarNotas(8.5, 9.0);
echo "\n";

echo "Média: " . $aluno1->calcularMedia() . "\n";
echo "Status: ";
$aluno1->verificarAprovacao();
echo "\n";

$aluno1->cancelarMatricula();
echo "\n";

$aluno1->exibirInformacoes();

?>