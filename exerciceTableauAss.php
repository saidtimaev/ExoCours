<?php
// 1. Create an empty associative array called `$contacts`
$contacts = array();

// 2. Add at least three contacts to the `$contacts` array
$contacts = array(
    "John Doe" => array("phone" => "123-456-7890", "email" => "john@example.com", "address" => "123 Main St"),
    "Jane Smith" => array("phone" => "987-654-3210", "email" => "jane@example.com", "address" => "456 Oak St"),
    "Bob Johnson" => array("phone" => "555-123-4567", "email" => "bob@example.com", "address" => "789 Pine St")
);

// 3. Write a function called `displayContact` that takes a contact's name as an argument and displays the contact details
function displayContact($name) {
    // Your code here
    global $contacts;
    $contactDetails = $contacts[$name];
    echo "Contact Details for $name:\n";
        echo "Phone: " . $contactDetails['phone'] . "\n";
        echo "Email: " . $contactDetails['email'] . "\n";
        echo "Address: " . $contactDetails['address'] . "\n";
}

// 4. Write a function called `addContact` that takes a name, phone number, email, and address as arguments and adds a new contact to the `$contacts` array
function addContact($name, $phone, $email, $address) {
    // Your code here
}

// 5. Test your functions
// Display the details of one of the contacts
displayContact("John Doe");

// Add a new contact
addContact("Alice Johnson", "111-222-3333", "alice@example.com", "456 Maple St");

// Display the details of the newly added contact
displayContact("Alice Johnson");

// 6. Bonus: Write a function called `deleteContact` that takes a name as an argument and removes the corresponding contact from the `$contacts` array
function deleteContact($name) {
    // Your code here
}
?>
