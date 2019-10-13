<?php

	function skills($skill, $percent) {

		$html = '<div style="font-family: Roboto; font-size: 13px" class="ml-4 mb-2">';
		$html .= '<i style="font-size: 20px;" class="fab fa-' . $skill . '"></i> ' . strtoupper($skill);
		$html .= '	<div class="mr-auto progress w-50">';
		$html .= '		<div class="progress-bar bg-info" role="progressbar" style="width: ' . $percent . '%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>';
		$html .= '	</div>';	
		$html .= '</div>';	

		return $html;
	}

  function profile_page() {

		$skills = [
			'html5' => '90',
			'css3' => '70',
			'php' => '60',
			'bootstrap' => '70',
			'docker' => '80',
			'js' => '60'
		];

		$html =  '<div class="container" style="font-family: Roboto">';
		$html .= '  <div class="row">';
		$html .= '      <div class="col-9 text-dark rounded border shadow-lg p-3 mb-5">';
		$html .= '          <h4 class="font-weight-bold ml-2 mt-2">Description</h4>';
		$html .= '          <p class="font-weight-light ml-4">Je suis développeur Web avec l\'envie de partager ce que j\'aime sur ce blog. Tu y trouveras tous les articles que j\'écris au fil de mes recherches.</p>';
		$html .= '          <h4 class="font-weight-bold ml-2 mt-5">Skills</h4>';

		$html .= '          <div class="">';
		foreach ($skills as $skill => $percent) {
			$html .= skills($skill, $percent);
		}
		$html .= '			</div>';

		$html .= '      </div>';
		$html .= '      <div class="col-3">';
		$html .= '          <img class="border shadow-lg p-3 mb-5 rounded" style="transform: scaleX(-1); filter: blur(0px);" src="https://miro.medium.com/fit/c/256/256/2*XfeHRnyY1pFryyisw5mwrg.jpeg"/>';
		$html .= '      </div>';
		$html .= '  </div>';
		$html .= '</div>';

		return ($html);
}