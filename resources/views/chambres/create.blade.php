@extends('layouts.app5')
@section('content')
        <br><br><br>
        <div class="ui container">
        <div class="column">
        <center><h2 class="ui brown image header">
                       
                        <div class="content">


                                    <b>CREATION CHAMBRES</b>
                                  

                        </div>
                </h2></center>
        <form class="ui form segment" method="POST" action="{{url('store')}}">
                  
                        {{ csrf_field()}}
                      <div class="field">
                        <label>Code Chambre</label>
                        <select  name="code" type="text">
                         <option>1 </option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7 </option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                          <option>31 </option>
                          <option>32</option>
                          <option>33</option>
                          <option>34</option>
                          <option>35</option>
                          <option>36</option>
                          <option>37 </option>
                          <option>38</option>
                          <option>39</option>
                          <option>40</option>
                          <option>41</option>
                          <option>42</option>
                          <option>43</option>
                          <option>44</option>
                          <option>45</option>
                          <option>46</option>
                          <option>47</option>
                          <option>48</option>
                          <option>49</option>
                          <option>50</option>
                          <option>51</option>
                          <option>52</option>
                          <option>53</option>
                          <option>54</option>
                          <option>55</option>
                          <option>56</option>
                          <option>57</option>
                          <option>58</option>
                          <option>59</option>
                          <option>60</option>
                          <option>61</option>
                          <option>62</option>
                          <option>63</option>
                          <option>64</option>
                          <option>65</option>
                          <option>66</option>
                          <option>67</option>
                          <option>68</option>
                          <option>69</option>
                          <option>70</option>
                        </select>
                      </div>
                      <div class="field">
                    <label>Pavillon</label>
                    <select  name="pavillon" type="text">
                      <option>A </option>
                      <option>B</option>
                      <option>C</option>
                      <option>D</option>
                      <option>E</option>
                      <option>F</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Etage</label>
                    <select  name="etage" type="text">
                          <option>0 </option>
                          <option>1 </option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Couloir</label>
                        <select  name="couloir" type="text">
                          <option>Gauche </option>
                          <option>Droite</option>
                        </select>
                      </div>
                 
                  
                  
                  <button type="submit" class=" ui brown fluid large  submit button" >DECLARER UNE CHAMBRE </button>
                  
                </form>
                </div>
                </div>
                @endsection

