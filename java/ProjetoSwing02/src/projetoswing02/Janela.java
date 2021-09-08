package projetoswing02;

import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JOptionPane;

public class Janela extends JFrame implements ActionListener {
    private JButton butOk;
    
    public Janela() {
        setLayout(new FlowLayout());
        
        butOk = new JButton("OK");
        butOk.addActionListener(this);
        add(butOk);
        
        setTitle("Minha Janela");
        //Quando clicar no botão de fechar janela
        //A janela some e sai da memória
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        
        
        setSize(500, 400);
        setVisible(true);
        setResizable(false);
        
    }
    
    public void actionPerformed(ActionEvent e) {
        JOptionPane.showMessageDialog(null, "Você me clicou!");
    }
    
}
