
package empresa;

import java.util.Scanner;

public class Empresa {

    public static void main(String[] args) {
        Empregado empregado1 = new Empregado();
        Empregado empregado2 = new Empregado();
        Scanner input = new Scanner(System.in);
        String nome;
        double salario;
        
        System.out.print("Digite o nome do Funcionário 1: ");
        nome = input.next();
        empregado1.setNome(nome);
        System.out.print("Digite o valor do seu salário: ");
        salario = input.nextDouble();
        empregado1.setSalarioMensal(salario);
        
        System.out.print("Digite o nome do Funcionário 2: ");
        nome = input.next();
        empregado2.setNome(nome);
        System.out.print("Digite o valor do seu salário: ");
        salario = input.nextDouble();
        empregado2.setSalarioMensal(salario);
        
        System.out.println("O salário anual de " 
                + empregado1.getNome() + " é: " 
                + empregado1.calcularSalarioAnual(empregado1.getSalarioMensal()));
        
        System.out.println("O salário anual de " 
                + empregado2.getNome() + " é: " 
                + empregado2.calcularSalarioAnual(empregado2.getSalarioMensal()));
        
        System.out.println("Calculando aumento de salário...");
        empregado1.aumentarSalario();
        System.out.println("Novo salário de " + empregado1.getNome()
                + " é " + empregado1.getSalarioMensal());
        empregado2.aumentarSalario();
        System.out.println("Novo salário de " + empregado2.getNome()
                + " é " + empregado2.getSalarioMensal());
    }
    
    
}
