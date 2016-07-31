<br><br>
<strong>Email</strong> : {{ $invitaion->email }} <br>
<strong>Name</strong> : {{ $invitaion->name }} <br>
<strong>Phone </strong> : {{ $invitaion->tel }} <br>
<strong>Feedback </strong> : {{ $invitaion->feedback }} <br>
<br><br>


<table border="1" cellpadding="5">
  <col width="48%">
  <col width="2%">
  <col width="50%">
  <tr>
    <td>Full Name</td>
    <td>:</td>
    <td>{{ $application->first_name }} {{ $application->last_name }}</td>
  </tr>
  <tr>
    <td>I verify that I am over 18 years old.</td>
    <td>:</td>
    <td>{{ $application->age_verify }} </td>
  </tr>
  
  <tr>
    <td>There are many reasons someone wants to build their own home based business. Click on the options that BEST fit what you’d want from your own business: </td>
    <td>:</td>
    <td><ul>
        @if(is_array($application->your_vision))
        @foreach($application->your_vision as $k => $v)
        <li>{{ $v }}</li>
        @endforeach
        @endif
      </ul>
      <br>
      {{ $application->your_vision_note }} </td>
  </tr>
  
  <tr>
    <td>Describe what you’d ideally like your life to be like in 12 months. Have fun with this and write as if you already have this lifestyle! </td>
    <td>:</td>
    <td>{{ $application->your_idea }} </td>
  </tr>
  
   <tr>
    <td>Given what you know right now about this opportunity, what do you think a realistic income might be within 1 year of starting your business:

 </td>
    <td>:</td>
    <td>{{ $application->your_income_1year }} </td>
  </tr>
  
  
   <tr>
    <td>Have you started a home based business in the past?</td>
    <td>:</td>
    <td>{{ $application->have_fast_businesses }} </td>
  </tr>
  
   <tr>
    <td>If you did do a home based business in the past, do you feel you were successful?</td>
    <td>:</td>
    <td>{{ $application->if_businesses_success }} </td>
  </tr>
  
  
   <tr>
    <td>If you did not have the success you wanted in a previous business, which best represent your situation</td>
    <td>:</td>
    <td><ul>
        @if(is_array($application->faild_reason))
        @foreach($application->faild_reason as $k => $v)
        <li>{{ $v }}</li>
        @endforeach
        @endif
      </ul>
      <br>
      {{ $application->faild_reason_note }} </td>
  </tr>
  
   <tr>
    <td>Why do you feel you’d be a good fit to work with our team of successful entrepreneurs?</td>
    <td>:</td>
    <td>{{ $application->why_you_join }} </td>
  </tr>
  
  
   <tr>
    <td>If you felt this was a business you wanted to pursue, how much time would you ideally like to put into your business:</td>
    <td>:</td>
    <td>{{ $application->woking_hours }} </td>
  </tr>
  
   <tr>
    <td>We have options available for new business owners to actually work with company funding and support. If funding support was made available to you, would you be interested in learning more

</td>
    <td>:</td>
    <td>{{ $application->funding_support_intrest }} </td>
  </tr>
  
   <tr>
    <td>In any business there are often optional expenses (setting up voicemail, advertising, business cards, etc.). In this business, these optional expenses often run between $ 300.00 and $ 400.00 dollars or more. If you felt you wanted to pursue this business (it made sense to you), what amount would be most manageable to you:

</td>
    <td>:</td>
    <td>{{ $application->expenses_limit }} </td>
  </tr>
  
   <tr>
    <td>Many of our parnters use credit cards for micellaneous business expenses to run their business. Others prefer to use cash or debit cards or a combination of all 3.
<br>
Which would you most likely use to run your business:</td>
    <td>:</td>
    <td><ul>
        @if(is_array($application->payment_method))
        @foreach($application->payment_method as $k => $v)
        <li>{{ $v }}</li>
        @endforeach
        @endif
      </ul>
      <br>
      {{ $application->payment_method_note }} </td>
  </tr>
  
  
   <tr>
    <td>In your view, what is the best way to earn income</td>
    <td>:</td>
    <td>{{ $application->best_way_to_earn }} </td>
  </tr>
  
   <tr>
    <td>Do you agree with this statement: “It is better to follow a path that is proven than reinvent a pathway.”

</td>
    <td>:</td>
    <td>{{ $application->statement_agree }} </td>
  </tr>
  
   <tr>
    <td>When you become successful, would you be willing to allow us to use your success story to be published on our website and other materials?

</td>
    <td>:</td>
    <td>{{ $application->like_to_public }} </td>
  </tr>
  
   <tr>
    <td>If you had success in a business through a step-by-step process, would you be willing to teach others how to be successful as well?

</td>
    <td>:</td>
    <td>{{ $application->teaching_others }} </td>
  </tr>
  <tr>
    <td>Would you work harder in your own home based business than you would for your current employer?

</td>
    <td>:</td>
    <td>{{ $application->would_like_workhard }} </td>
  </tr>
  
  
  <tr>
    <td>How would you describe your attitude towards life?</td>
    <td>:</td>
    <td>{{ $application->life_attitude }} </td>
  </tr>
  
  <tr>
    <td>Additonal comments you’d like for us to know</td>
    <td>:</td>
    <td>{{ $application->comments }} </td>
  </tr>
  
  
</table>
