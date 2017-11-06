<?php namespace taxi\Http\Middleware;

use Closure;

class AdminOnly extends Authenticate {

  public function handle($request, Closure $next) {
    if ($this->auth->check() && $this->auth->user()->admin()) {
      return $next($request);
    } else {
      return redirect()->route('home');
    }
  }

}
