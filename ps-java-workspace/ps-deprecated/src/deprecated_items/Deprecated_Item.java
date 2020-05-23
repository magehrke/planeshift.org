package deprecated_items;

public class Deprecated_Item {
	
	public String name;
	public int price;
	
	public Deprecated_Item(String name, int price) {
		super();
		this.price = price;
		this.name = name;
	}
	

	
	/**
	 * @return the price
	 */
	public int getPrice() {
		return price;
	}
	/**
	 * @param price the price to set
	 */
	public void setPrice(int price) {
		this.price = price;
	}
	/**
	 * @return the name
	 */
	public String getName() {
		return name;
	}
	/**
	 * @param name the name to set
	 */
	public void setName(String name) {
		this.name = name;
	}

}
