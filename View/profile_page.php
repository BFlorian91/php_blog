<?php

	function skills($skill, $percent) {

		$html = '<div style="font-family: Roboto; font-size: 13px">';
		$html .= $skill;
		$html .= '	<div class="mr-auto progress w-50">';
		$html .= '		<div class="progress-bar bg-info" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>';
		$html .= '	</div>';	
		$html .= '</div>';	

		return $html;
	}

  function profile_page() {

		$skills = [
			'html/css' => '100',
			'php' => '60',
			'bootstrap' => '70',
			'docker' => '80',
			'javscript' => '60'
		];

		$html =  '<div class="container" style="font-family: Roboto">';
		$html .= '  <div class="row">';
		$html .= '      <div class="col-9 text-dark rounded border shadow-lg p-3 mb-5">';
		$html .= '          <h4 class="font-weight-bold">Description</h4>';
		$html .= '          <p class="font-weight-light">Je suis développeur Web avec l\'envie de partager ce que j\'aime sur ce blog. Tu y trouveras tous les articles que j\'écris au fil de mes recherches.</p>';
		$html .= '          <h4 class="font-weight-bold">Skills</h4>';

		$html .= '          <div class="">';
		foreach ($skills as $skill => $percent) {
			$html .= skills($skill, $percent);
		}
		$html .= '					</div>';

		$html .= '      </div>';
		$html .= '      <div class="col-3">';
		$html .= '          <img class="border shadow-lg p-3 mb-5 rounded" style="transform: scaleX(-1); filter: blur(0px);" src="https://miro.medium.com/fit/c/256/256/2*XfeHRnyY1pFryyisw5mwrg.jpeg"/>';
		$html .= '      </div>';
		$html .= '  </div>';
		$html .= '</div>';

		return ($html);
}