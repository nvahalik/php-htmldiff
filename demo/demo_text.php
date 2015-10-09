<?php

$demos = array(
    /*array(
        'old' => "<ol> 
<li>During the 40 kW exposure, flames <li>yeaaaa she <li>MICKEY <li>HAPPY MEAL</li> MOUSE</li> did</li> <li>noooooo</li> shall not spread to the ceiling.</li> 
<li>The flame shall not spread to the outer extremities of the samples on the 8-foot by 12-foot (203 by 305 mm) walls.</li>
<li>Flashover, as defined in NFPA 265, shall not occur.</li>
<li>The total smoke released throughout the test shall not exceed 1,000 m<sup>2</sup>. Stuff:  <ol>
<li>All the stuff I didnt</li>
<li>Ok, I can</li>
<li>Oh no she didnt.</li>
</ol>
</li>
</ol>",

        'new' => "<ol> <li>During the 40 kW exposure, flames shall not spread to the ceiling.</li> <li>The flame shall not spread to the outer extremities of the samples on the 8-foot by 12-foot (203 by 305 mm) walls.</li> <li>Flashover, as defined in NFPA 265, shall not occur.</li> <li>The total smoke <li>yep she did</li> released throughout the test shall not exceed 1,000 m<sup>2</sup>. Stuff:  <ol> <li>All the stuff I didnt</li> <li>Ok, I can</li> <li>Oh no she didnt.</li> </ol> </li> </ol>"
    )*/
    array(
        'old' => '<p>The required capacity of each door opening shall be sufficient for the <em>occupant load</em> thereof and shall provide a minimum clear width of 32 inches (813 mm). Clear openings of doorways with swinging doors shall be measured between the face of the door and the stop, with the door open 90 degrees (1.57 rad). Where this section requires a minimum clear width of 32 inches (813 mm) and a door opening includes two door leaves without a mullion, one leaf shall provide a clear opening width of 32 inches (813 mm). The maximum width of a swinging door leaf shall be 48 inches (1219 mm) nominal. <em>Means of egress</em> doors in a Group I-2 occupancy used for the movement of beds shall provide a clear width not less than 41<sup>1</sup>/ <sub><sub>2 </sub></sub> inches (1054 mm). The height of door openings shall be not less than 80 inches (2032 mm).</p><ul class="exception"><li><strong>Exceptions:</strong><ol><li>The minimum and maximum width shall not apply to door openings that are not part of the required <em>means of egress </em>in Group R-2 and R-3 occupancies.</li><li>Door openings to resident <em>sleeping units</em> in Group I-3 occupancies shall have a clear width of not less than 28 inches (711 mm).</li><li>Door openings to storage closets less than 10 square feet (0.93 m<sup>2</sup>) in area shall not be limited by the minimum width.</li><li>Width of door leaves in revolving doors that comply with Section 1010.1.4.1 shall not be limited.</li><li>Door openings within a <em>dwelling unit</em> or <em>sleeping unit</em> shall be not less than 78 inches (1981 mm) in height.</li><li>Exterior door openings in <em>dwelling units</em> and <em>sleeping units</em>, other than the required <em>exit </em>door, shall be not less than 76 inches (1930 mm) in height.</li><li>In other than Group R-1 occupancies, the minimum widths shall not apply to interior egress doors within a <em>dwelling unit</em> or <em>sleeping unit</em> that is not required to be an <em>Accessible unit</em>, <em>Type A unit </em>or <em>Type B unit</em>.</li><li>Door openings required to be <em>accessible</em> within <em>Type B units</em> shall have a minimum clear width of 31.75 inches (806 mm).</li><li>Doors to walk-in freezers and coolers less than 1,000 square feet (93 m<sup>2</sup>) in area shall have a maximum width of 60 inches (1524 mm).</li><li>In Group R-1 <em>dwelling units</em> or <em>sleeping units</em> not required to be <em>Accessible units</em>, the minimum width shall not apply to doors for showers or saunas.</li></ol></li></ul>',
        'new' => '
<p>The required capacity of each door opening shall be sufficient for the <span class="content_italics">occupant load</span> thereof and shall provide a minimum clear&nbsp;opening&nbsp;width of 32 inches (813 mm). The clear opening width&nbsp;of doorways with swinging doors shall be measured between the face of the door and the stop, with the door open 90 degrees (1.57 rad). Where this section requires a minimum clear opening width of 32 inches (813 mm) and a door opening includes two door leaves without a mullion, one leaf shall provide a minimum clear opening width of 32 inches (813 mm). In Group I-2, doors serving as &nbsp;<em>m</em><span class="content_italics">eans of egress</span> doors where&nbsp;used for the movement of beds shall provide a minimum clear opening width of&nbsp;41<sup>1</sup>/ <sub>2 </sub> inches (1054 mm). The maximum width of a swinging door leaf shall be 48 inches (1219 mm) nominal. The minimum clear opening height of doors shall be 80 inches (2032 mm).</p>
<ul class="exception">
<li><span class="content_bold">Exceptions:</span>
<ol>
<li>In Group R-2 and R-3 dwelling and sleeping units that are not required to be an Accessible unit, Type A unit or Type B unit, the minimum and maximum width shall not apply to door openings that are not part of the required <span class="content_italics">means of egress</span>.</li>
<li>In Group I-3, door openings to resident <span class="content_italics">sleeping units</span>&nbsp;that are not required to be an Accessible unit shall have a minimum clear opening width of 28 inches (711 mm).</li>
<li>Door openings to storage closets less than 10 square feet (0.93 m<sup>2</sup>) in area shall not be limited by the minimum clear opening width.</li>
<li>The width of door leaves in revolving doors that comply with Section 1010.1.4.1 shall not be limited.</li>
<li>Door openings within a <span class="content_italics">dwelling unit</span> or <span class="content_italics">sleeping unit</span> shall have a minimum clear opening height&nbsp;than 78 inches (1981 mm) in height.</li>
<li>In dwelling and sleeping units that are not required to be Accessible, Type A or Type B units, exterior door openings, other than the required <span class="content_italics">exit </span>door, shall have a minimum clear opening height of&nbsp;76 inches (1930 mm) in height.</li>
<li>Groups I-1, R-2, R-3 and R-4&nbsp;occupancies, in dwelling and sleeping units that are not required to be Accessible, Type A or Type B units, the minimum clear opening widths shall not apply to interior egress doors.</li>
<li>Door openings within <span class="content_italics">Type B units</span>&nbsp;intended for user passage shall have a minimum clear opening width of 31.75 inches (806 mm).</li>
<li>Doors to walk-in freezers and coolers less than 1,000 square feet (93 m<sup>2</sup>) in area shall have a maximum width of 60 inches (1524 mm) nominal.</li>
<li>The minimum clear opening width shall not apply to doors for non-accessible shower or sauna compartments.</li>
<li>The minimum clear opening width shall not apply to the doors for non-accessible toilet stalls.</li>
</ol>
</li>
</ul>'
    )
);
header('Content-Type: application/json');
echo json_encode($demos);
