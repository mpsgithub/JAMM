<?php

class chef extends CI_Model
{

	public function chef_bio_update($post)
	{
		 // echo "in model"; var_dump($this->session->all_userdata());
		 // echo "in model"; var_dump($post);
		 // echo "in model"; var_dump($this->session->userdata('id')); die();
		$query = "UPDATE Chefs SET bio = ?  WHERE Chefs.id = ?";
		$value = array($post['new_bio'], $post['chef_profile_id']);
		$this->db->query($query, $value);
		return $post['chef_profile_id'];

	}

	public function chef_add_menu($post)
	{
		 // echo "in models chef_add_menu"; var_dump($post); die();
		$query = "INSERT INTO Foods (name, description, food_pic_url, created_at, updated_at, chef_id, cuisine_id) VALUES (?, ?, ?, NOW(), NOW(), ?, ?)";
		$values1 = array($post['menu1_name'], $post['menu1_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu1_cuisine']);
		 // echo ""; var_dump($values1);
		$values2 = array($post['menu2_name'], $post['menu2_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu2_cuisine']);
		 // echo ""; var_dump($values2); 
		$values3 = array($post['menu3_name'], $post['menu3_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu3_cuisine']);
		 // echo ""; var_dump($values3); 
		$values4 = array($post['menu4_name'], $post['menu4_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu4_cuisine']);
		 // echo ""; var_dump($values4); 
		$values5 = array($post['menu5_name'], $post['menu5_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu5_cuisine']);
		 // echo ""; var_dump($values5); die();
		$this->db->query($query, $values1);
		$this->db->query($query, $values2);
		$this->db->query($query, $values3);
		$this->db->query($query, $values4);
		$this->db->query($query, $values5);
		 //store menus as foods for each chef
		 //pass back array from model to chef_add_menu method
		 //pass the result of the array above as argument of chef_edit_menu to load it in view under teh chef_edit_menu method
		 //use foreach loop to display each food as menu items in chef_menu
	}

	public function chef_grab_menu()
	{
		// runs when /chef/chef_grab_menu is triggered and returns a multi dimensional associative array of the menu items the chef enters in.
		// echo ""; var_dump($this->session->userdata('id')); die();
		$id = $this->session->userdata('id');
		$query = "SELECT * FROM Foods
		LEFT JOIN foods_allergens on foods.id = foods_allergens.food_id
		LEFT JOIN allergens on allergens.id = foods_allergens.allergen_id
		WHERE chef_id IN ($id)
		ORDER BY foods.created_at DESC
		LIMIT 5";
		return $result = $this->db->query($query)->result_array();
	}

	public function get_chef_orders_this_week($post)
	{
		$query = "SELECT orders.id, orders.qty, orders.order_date, orders.pickup_date, orders.special_instructions,
orders.fulfilled, orders.created_at, orders.user_id, orders.food_id,
foods.id, foods.name, foods.description, foods.food_pic_url, foods.chef_id, foods.cuisine_id,
cuisines.id, cuisines.type, prices.id, prices.price, prices.food_id, prices.size_id,
sizes.id, sizes.type FROM Orders
		LEFT JOIN users on users.id = orders.user_id
        LEFT JOIN foods on foods.id = orders.food_id
		LEFT JOIN cuisines on cuisines.id = foods.cuisine_id
		LEFT JOIN prices on foods.id = prices.food_id
		LEFT JOIN sizes on sizes.id = prices.size_id
		WHERE users.id = ?
        ORDER BY orders.pickup_date DESC";

		// echo "in model"; var_dump($this->session->all_userdata()); die();
		$value = array($this->session->userdata('id'))[0];
		 // echo "in model"; var_dump($value); die();

		$chef_orders = $this->db->query($query, $value)->result_array();
		 // echo "in model chef_orders"; var_dump($chef_orders); die();
		return $chef_orders;

	}

	public function chef_update_fulfilled_status($order_id)
	{
		$query = "UPDATE Orders SET fulfilled = ? WHERE food_id = ?";
		$fulfilled = "0";
		$values = array($fulfilled, $order_id);
		 // echo "in model"; var_dump($values); die();
		$result = $this->db->query($query, $values);
		 // echo "in model"; var_dump($result); die();
	}


	public function get_chef_by_id($chef_id){
		$query = "SELECT * from chefs where id = $chef_id";
		return $this->db->query($query)->row_array();

	}
}

?>