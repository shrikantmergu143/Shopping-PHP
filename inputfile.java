import java.io.FIleOutputStream;
class inputfile{
	public static void main(String[] args) {
		try{
			FIleOutputStream file=new FIleOutputStream("1.java");
			String s="";
			file.write(s);
			file.Close();
			System.out.println("SECCESS...........");
		}catch(Exception e ){ System.out.println(e); }
	}
}