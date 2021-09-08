package empresa;


public class Empregado {
    private String nome;
    private double salarioMensal;
    private double corrigeSalario;

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public double getSalarioMensal() {
        return salarioMensal;
    }

    public void setSalarioMensal(double salarioMensal) {
        if (salarioMensal < 0) {
            corrigeSalario = Math.abs(salarioMensal);
            this.salarioMensal = corrigeSalario;
        } else {
        this.salarioMensal = salarioMensal;
        }
    }
    
    public double calcularSalarioAnual(double salario) {
        double anual = (salario * 12);
        return anual;
        
    }
    
    public void aumentarSalario() {
        double aumentoSalario = salarioMensal * 0.10;
        salarioMensal = salarioMensal + aumentoSalario;
    }
}
