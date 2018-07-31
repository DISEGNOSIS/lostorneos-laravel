<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
			['code' => 'AF', 'name' => 'Afghanistan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AL', 'name' => 'Albania', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'DZ', 'name' => 'Algeria', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AS', 'name' => 'American Samoa', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AD', 'name' => 'Andorra', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AO', 'name' => 'Angola', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AI', 'name' => 'Anguilla', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AQ', 'name' => 'Antarctica', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AG', 'name' => 'Antigua and/or Barbuda', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AR', 'name' => 'Argentina', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AM', 'name' => 'Armenia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AW', 'name' => 'Aruba', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AU', 'name' => 'Australia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AT', 'name' => 'Austria', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AZ', 'name' => 'Azerbaijan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BS', 'name' => 'Bahamas', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BH', 'name' => 'Bahrain', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BD', 'name' => 'Bangladesh', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BB', 'name' => 'Barbados', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BY', 'name' => 'Belarus', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BE', 'name' => 'Belgium', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BZ', 'name' => 'Belize', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BJ', 'name' => 'Benin', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BM', 'name' => 'Bermuda', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BT', 'name' => 'Bhutan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BO', 'name' => 'Bolivia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BA', 'name' => 'Bosnia and Herzegovina', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BW', 'name' => 'Botswana', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BV', 'name' => 'Bouvet Island', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BR', 'name' => 'Brazil', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'IO', 'name' => 'British lndian Ocean Territory', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BN', 'name' => 'Brunei Darussalam', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BG', 'name' => 'Bulgaria', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BF', 'name' => 'Burkina Faso', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'BI', 'name' => 'Burundi', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KH', 'name' => 'Cambodia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CM', 'name' => 'Cameroon', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CA', 'name' => 'Canada', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CV', 'name' => 'Cape Verde', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KY', 'name' => 'Cayman Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CF', 'name' => 'Central African Republic', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TD', 'name' => 'Chad', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CL', 'name' => 'Chile', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CN', 'name' => 'China', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CX', 'name' => 'Christmas Island', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CC', 'name' => 'Cocos (Keeling] Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CO', 'name' => 'Colombia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KM', 'name' => 'Comoros', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CG', 'name' => 'Congo', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CK', 'name' => 'Cook Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CR', 'name' => 'Costa Rica', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'HR', 'name' => 'Croatia (Hrvatska]', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CU', 'name' => 'Cuba', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CY', 'name' => 'Cyprus', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CZ', 'name' => 'Czech Republic', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CD', 'name' => 'Democratic Republic of Congo', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'DK', 'name' => 'Denmark', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'DJ', 'name' => 'Djibouti', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'DM', 'name' => 'Dominica', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'DO', 'name' => 'Dominican Republic', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TP', 'name' => 'East Timor', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'EC', 'name' => 'Ecudaor', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'EG', 'name' => 'Egypt', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SV', 'name' => 'El Salvador', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GQ', 'name' => 'Equatorial Guinea', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ER', 'name' => 'Eritrea', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'EE', 'name' => 'Estonia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ET', 'name' => 'Ethiopia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'FK', 'name' => 'Falkland Islands (Malvinas]', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'FO', 'name' => 'Faroe Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'FJ', 'name' => 'Fiji', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'FI', 'name' => 'Finland', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'FR', 'name' => 'France', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'FX', 'name' => 'France, Metropolitan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GF', 'name' => 'French Guiana', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PF', 'name' => 'French Polynesia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TF', 'name' => 'French Southern Territories', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GA', 'name' => 'Gabon', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GM', 'name' => 'Gambia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GE', 'name' => 'Georgia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'DE', 'name' => 'Germany', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GH', 'name' => 'Ghana', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GI', 'name' => 'Gibraltar', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GR', 'name' => 'Greece', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GL', 'name' => 'Greenland', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GD', 'name' => 'Grenada', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GP', 'name' => 'Guadeloupe', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GU', 'name' => 'Guam', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GT', 'name' => 'Guatemala', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GN', 'name' => 'Guinea', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GW', 'name' => 'Guinea-Bissau', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GY', 'name' => 'Guyana', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'HT', 'name' => 'Haiti', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'HM', 'name' => 'Heard and Mc Donald Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'HN', 'name' => 'Honduras', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'HK', 'name' => 'Hong Kong', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'HU', 'name' => 'Hungary', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'IS', 'name' => 'Iceland', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'IN', 'name' => 'India', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ID', 'name' => 'Indonesia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'IR', 'name' => 'Iran (Islamic Republic of]', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'IQ', 'name' => 'Iraq', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'IE', 'name' => 'Ireland', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'IL', 'name' => 'Israel', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'IT', 'name' => 'Italy', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CI', 'name' => 'Ivory Coast', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'JM', 'name' => 'Jamaica', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'JP', 'name' => 'Japan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'JO', 'name' => 'Jordan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KZ', 'name' => 'Kazakhstan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KE', 'name' => 'Kenya', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KI', 'name' => 'Kiribati', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KP', 'name' => 'Korea, Democratic People\'s Republic of', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KR', 'name' => 'Korea, Republic of', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KW', 'name' => 'Kuwait', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KG', 'name' => 'Kyrgyzstan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LA', 'name' => 'Lao People\'s Democratic Republic', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LV', 'name' => 'Latvia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LB', 'name' => 'Lebanon', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LS', 'name' => 'Lesotho', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LR', 'name' => 'Liberia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LY', 'name' => 'Libyan Arab Jamahiriya', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LI', 'name' => 'Liechtenstein', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LT', 'name' => 'Lithuania', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LU', 'name' => 'Luxembourg', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MO', 'name' => 'Macau', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MK', 'name' => 'Macedonia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MG', 'name' => 'Madagascar', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MW', 'name' => 'Malawi', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MY', 'name' => 'Malaysia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MV', 'name' => 'Maldives', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ML', 'name' => 'Mali', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MT', 'name' => 'Malta', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MH', 'name' => 'Marshall Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MQ', 'name' => 'Martinique', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MR', 'name' => 'Mauritania', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MU', 'name' => 'Mauritius', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TY', 'name' => 'Mayotte', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MX', 'name' => 'Mexico', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'FM', 'name' => 'Micronesia, Federated States of', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MD', 'name' => 'Moldova, Republic of', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MC', 'name' => 'Monaco', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MN', 'name' => 'Mongolia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MS', 'name' => 'Montserrat', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MA', 'name' => 'Morocco', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MZ', 'name' => 'Mozambique', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MM', 'name' => 'Myanmar', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NA', 'name' => 'Namibia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NR', 'name' => 'Nauru', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NP', 'name' => 'Nepal', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NL', 'name' => 'Netherlands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AN', 'name' => 'Netherlands Antilles', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NC', 'name' => 'New Caledonia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NZ', 'name' => 'New Zealand', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NI', 'name' => 'Nicaragua', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NE', 'name' => 'Niger', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NG', 'name' => 'Nigeria', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NU', 'name' => 'Niue', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NF', 'name' => 'Norfork Island', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'MP', 'name' => 'Northern Mariana Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'NO', 'name' => 'Norway', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'OM', 'name' => 'Oman', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PK', 'name' => 'Pakistan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PW', 'name' => 'Palau', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PA', 'name' => 'Panama', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PG', 'name' => 'Papua New Guinea', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PY', 'name' => 'Paraguay', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PE', 'name' => 'Peru', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PH', 'name' => 'Philippines', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PN', 'name' => 'Pitcairn', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PL', 'name' => 'Poland', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PT', 'name' => 'Portugal', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PR', 'name' => 'Puerto Rico', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'QA', 'name' => 'Qatar', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SS', 'name' => 'Republic of South Sudan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'RE', 'name' => 'Reunion', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'RO', 'name' => 'Romania', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'RU', 'name' => 'Russian Federation', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'RW', 'name' => 'Rwanda', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'KN', 'name' => 'Saint Kitts and Nevis', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LC', 'name' => 'Saint Lucia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'VC', 'name' => 'Saint Vincent and the Grenadines', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'WS', 'name' => 'Samoa', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SM', 'name' => 'San Marino', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ST', 'name' => 'Sao Tome and Principe', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SA', 'name' => 'Saudi Arabia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SN', 'name' => 'Senegal', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'RS', 'name' => 'Serbia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SC', 'name' => 'Seychelles', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SL', 'name' => 'Sierra Leone', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SG', 'name' => 'Singapore', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SK', 'name' => 'Slovakia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SI', 'name' => 'Slovenia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SB', 'name' => 'Solomon Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SO', 'name' => 'Somalia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ZA', 'name' => 'South Africa', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GS', 'name' => 'South Georgia South Sandwich Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ES', 'name' => 'Spain', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'LK', 'name' => 'Sri Lanka', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SH', 'name' => 'St. Helena', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'PM', 'name' => 'St. Pierre and Miquelon', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SD', 'name' => 'Sudan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SR', 'name' => 'Suriname', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SJ', 'name' => 'Svalbarn and Jan Mayen Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SZ', 'name' => 'Swaziland', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SE', 'name' => 'Sweden', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'CH', 'name' => 'Switzerland', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'SY', 'name' => 'Syrian Arab Republic', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TW', 'name' => 'Taiwan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TJ', 'name' => 'Tajikistan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TZ', 'name' => 'Tanzania, United Republic of', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TH', 'name' => 'Thailand', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TG', 'name' => 'Togo', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TK', 'name' => 'Tokelau', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TO', 'name' => 'Tonga', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TT', 'name' => 'Trinidad and Tobago', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TN', 'name' => 'Tunisia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TR', 'name' => 'Turkey', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TM', 'name' => 'Turkmenistan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TC', 'name' => 'Turks and Caicos Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'TV', 'name' => 'Tuvalu', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'UG', 'name' => 'Uganda', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'UA', 'name' => 'Ukraine', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'AE', 'name' => 'United Arab Emirates', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'GB', 'name' => 'United Kingdom', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'US', 'name' => 'United States', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'UM', 'name' => 'United States minor outlying islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'UY', 'name' => 'Uruguay', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'UZ', 'name' => 'Uzbekistan', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'VU', 'name' => 'Vanuatu', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'VA', 'name' => 'Vatican City State', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'VE', 'name' => 'Venezuela', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'VN', 'name' => 'Vietnam', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'VG', 'name' => 'Virgin Islands (British]', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'VI', 'name' => 'Virgin Islands (U.S.]', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'WF', 'name' => 'Wallis and Futuna Islands', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'EH', 'name' => 'Western Sahara', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'YE', 'name' => 'Yemen', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'YU', 'name' => 'Yugoslavia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ZR', 'name' => 'Zaire', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ZM', 'name' => 'Zambia', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
			['code' => 'ZW', 'name' => 'Zimbabwe', 'flag' => '/img/flags/argentina.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        
        DB::table('countries')->insert($countries);
    }
}
