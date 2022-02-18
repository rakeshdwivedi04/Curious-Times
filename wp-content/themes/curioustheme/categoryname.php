<?php
			$categories = get_the_category();
			$separator=",";
			$output="";
			if($categories)
{					
				foreach($categories as $category)
					{

						$output=  $category->cat_name . $separator;

			}
			echo trim($output, $separator);

}

			?>