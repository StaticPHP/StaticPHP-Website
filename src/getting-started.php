---
current_page: getting-started
page_title: Getting Started
layout: src/_includes/base.php
---

        <section class="w3-padding-32">
            <div class="w3-content w3-padding">
                <h2>Getting Started</h2>
                <p>It is super easy to get started with StaticPHP for your next website project.</p>

		<p>Before you use StaticPHP, make sure you create your source directory (e.g. src) and put your website files in there, including your PHP files.</p>
		
		<h3>Use the StaticPHP Launcher (Recommended)</h3>
		<p>The recommended and easiest way to use StaticPHP is with the Launcher.</p>
		
		<p>The launcher will ensure you are always running the latest StaticPHP version upon each execution, and allow you to save your build configuration for easy execution in future.</p>
		
		<ol>
			<li>Download the latest StaticPHP Launcher file from GitHub.
			<ul>
				<li><a href="https://raw.githubusercontent.com/DavidHunterScot/StaticPHP/master/StaticPHP-Launcher.php" target="_blank">https://raw.githubusercontent.com/DavidHunterScot/StaticPHP/master/StaticPHP-Launcher.php</a>.</li>
			</ul>
			<li>Modify the configurable options in that file to suit your project.</li>
        		<ul>
        			<li><code>$path_to_source_files</code> = Set this to the path where you have put your source files. A good name for the source directory is src but this is up to you.</li>
				<li><code>$path_to_public_files</code> = Set this to the path where you wish your generated output files. A good name for the public files is public but this is up to you.</li>
				<li><code>$paths_to_ignore</code> = Modify this array to include elements that will form parts of paths you wish to ignore.</li>
				<li><code>$friendly_urls</code> = Setting friendly URLs to false will turn PHP files into their respective HTML files. Setting friendly URLs to true will turn PHP files into their respective directories with an index.html file inside.</li>
			</ul>
			<li>Execute the StaticPHP Launcher with the following command: <code>php StaticPHP-Launcher.php</code></li>
			<li>Check the output log for errors and fix them. Remember to re-execute StaticPHP Launcher after each modification of the source files or the output files may not reflect the changes.</li>
		</ol>

		<h3>Use the Command Line</h3>
		
		<ol>
			<li>Download the latest StaticPHP file from GitHub.</li>
			<ul>
				<li><a href="https://raw.githubusercontent.com/DavidHunterScot/StaticPHP/master/StaticPHP.php" target="_blank">https://raw.githubusercontent.com/DavidHunterScot/StaticPHP/master/StaticPHP.php</a></li>
			</ul>
			<li>Execute StaticPHP with the following command <code>php StaticPHP.php PATH_TO_SOURCE_FILES PATH_TO_PUBLIC_FILES PATH_TO_IGNORE FRIENDLY_URLS_TRUE_OR_FALSE</code></li>
        		<ul>
        			<li>The above command explained:</li>
        			<ul>
        				<li>First part is you wanting to run PHP.</li>
					<li>The second part is the file you wish PHP to execute.</li>
            				<li>The rest are parameters/arguments with information for StaticPHP. All should be self explanatory, but note the following.</li>
            				<ul>
            					<li>PATH_TO_IGNORE is treated as a string, and therefore can only contain one element.</li>
						<li>FRIENDLY_URLS_TRUE_OR_FALSE is treated as a boolean, so only true or false is acceptable, anything else will be treated as false.</li>
					</ul>
				</ul>
			</ul>
			<li>Check the output log for errors and fix them. Remember to re-execute StaticPHP after each modification of the source files or the output files may not reflect the changes.</li>
		</ol>
		
		<h3>Use your own Custom PHP Script</h3>
		
		<ol>
			<li>Download the latest StaticPHP file from GitHub.</li>
			
			<ul>
				<li><a href="https://raw.githubusercontent.com/DavidHunterScot/StaticPHP/master/StaticPHP.php" target="_blank">https://raw.githubusercontent.com/DavidHunterScot/StaticPHP/master/StaticPHP.php</a></li>
			</ul>
			
			<li>
				<p>In your custom PHP file, include the StaticPHP.php file and create a new instance with the build configuration as parameters/arguments.</p>

				<pre class="w3-code" style="overflow-x: auto;">
<?php echo strip_tags( highlight_string( "<?php

include __DIR__ . DIRECTORY_SEPARATOR . 'StaticPHP.php';

\$path_to_source_files = __DIR__ . DIRECTORY_SEPARATOR . 'SOURCE-FILES';
\$path_to_public_files = __DIR__ . DIRECTORY_SEPARATOR . 'PUBLIC-FILES';
\$paths_to_ignore = array( 'IGNORE-FILES' );
\$friendly_urls = true;

new StaticPHP( \$path_to_source_files, \$path_to_public_files, \$paths_to_ignore, \$friendly_urls );
", true ), '<span>' ); ?>
</pre>
			</li>
			
			<li>Execute your custom script with the following command php CUSTOM-PHP-SCRIPT.php (where CUSTOM-PHP-SCRIPT is the actual filename of your custom script).</li>
			
			<li>Check the output log for errors and fix them. Remember to re-execute your custom script after each modification of the source files or the output files may not reflect the changes.</li>
		</ol>
            </div>
        </section>

