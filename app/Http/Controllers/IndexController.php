<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        return view('pages/index');
    }

    public function awsDirectConnect()
    {
        $this->_data['title'] = 'aws-direct-connect';
        return view('pages/aws_direct_connect', $this->_data);
    }

    public function azureExpressRoute()
    {
        $this->_data['title'] = 'microsoft-azure-expressroute';
        return view('pages/azure_expressroute', $this->_data);
    }

    public function awsPublicSupportStatement()
    {
        $this->_data['title'] = 'aws-public-support-statement';
        return view('pages/aws_public_support_statement', $this->_data);
    }

    public function policyAndRegulations()
    {
        $this->_data['title'] = 'policy-and-regulations';
        return view('policy/policy_and_regulations', $this->_data);
    }

    public function privacyPolicy()
    {
        $this->_data['title'] = 'privacy-policy';
        return view('policy/privacy_policy', $this->_data);
    }

    public function termsOfUse()
    {
        $this->_data['title'] = 'terms-of-use';
        return view('policy/terms_of_use', $this->_data);
    }
}
