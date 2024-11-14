<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration</title>
</head>
<body>

    <h2>Seller Registration</h2>
    <hr>

    <?php
    // Controller
    include('../../../controllers/registration_controller.php');
    ?>

    <form action="../../../controllers/registration_controller.php" method="post">
        
        <!-- Personal Information Section -->
        <fieldset>
            <legend><b>Personal Information</b></legend>
            <table>
                <tr>
                    <td><label for="full_name">Full Name:</label></td>
                    <td><input type="text" id="full_name" name="full_name" minlength="4" ></td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" pattern=".+@aiub\.edu" ></td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" minlength="6" ></td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="tel" id="phone" name="phone" pattern="[0-9]{10,15}" ></td>
                </tr>
            </table>
        </fieldset>

        <!-- Business Information Section -->
        <fieldset>
            <legend><b>Business Information</b></legend>
            <table>
                <tr>
                    <td><label for="business_name">Business Name:</label></td>
                    <td><input type="text" id="business_name" name="business_name" ></td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="business_address">Business Address:</label></td>
                    <td><textarea id="business_address" name="business_address" rows="4" cols="40" ></textarea></td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="tax_id">Tax Identification Number:</label></td>
                    <td><input type="text" id="tax_id" name="tax_id" pattern="[0-9A-Z]{8,12}" ></td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="bank_account">Bank Account Information:</label></td>
                    <td><input type="text" id="bank_account" name="bank_account" ></td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="business_type">Type of Business:</label></td>
                    <td>
                        <select id="business_type" name="business_type" >
                            <option value="">Select...</option>
                            <option value="retail">Retail</option>
                            <option value="wholesale">Wholesale</option>
                            <option value="manufacturer">Manufacturer</option>
                            <option value="service">Service Provider</option>
                        </select>
                    </td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="business_start_date">Business Start Date:</label></td>
                    <td><input type="date" id="business_start_date" name="business_start_date" ></td>
                </tr>
            </table>
        </fieldset>

        <!-- Additional Information Section -->
        <fieldset>
            <legend><b>Additional Information</b></legend>
            <table>
                <tr>
                    <td><label for="preferred_contact_method">Preferred Contact Method:</label></td>
                    <td>
                        <select id="preferred_contact_method" name="preferred_contact_method" >
                            <option value="">Select...</option>
                            <option value="email">Email</option>
                            <option value="phone">Phone</option>
                            <option value="sms">SMS</option>
                        </select>
                    </td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="website">Business Website (optional):</label></td>
                    <td><input type="url" id="website" name="website" placeholder="https://example.com"></td>
                </tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr>
                    <td><label for="terms">Agree to Terms & Conditions:</label></td>
                    <td><input type="checkbox" id="terms" name="terms" > I agree</td>
                </tr>
            </table>
        </fieldset>

        <br>
        <input type="submit" value="Register as Seller">
    </form>

</body>
</html>