<?php

namespace App\Http\Responders;

use App\Models\User;
use Spatie\Honeypot\SpamResponder\SpamResponder;
use Symfony\Component\HttpFoundation\Response;
use Closure;
use Illuminate\Http\Request;


class HoneyPotSpamResponder implements SpamResponder
{
    public function respond(Request $request, Closure $next): Response
    {
        activity()->performedOn(new User())->useLog('spam_attack')->log('Spam attack with Ip addresss' . $request->ip());

        if ($request->ajax()) {
            return response()->json(['message' => 'Your submission was detected as spam. Please try again.'], 403);
        }
        
        session()->flash('error', 'Your submission was detected as spam. Please try again.');
        return response()->view('honeypot_form');
    }
}