<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'Home',
    'RiskManagement'=>'Risk Management',
    'Reporting'=>'Reporting',
    'Configure'=>'Configure',
    'MyProfile'=>'My Profile',
    'Logout'=>'Logout',
    'LogInHere'=>'Login to SimpleRisk',
    'Username'=>'Username',
    'Password'=>'Password',
    'ForgotYourPassword'=>'Forgot your password',
    'Login'=>'Login',
    'Reset'=>'Reset',
    'Send'=>'Send',
    'Update'=>'Update',
    'SendPasswordResetEmail'=>'Send Password Reset Email',
    'PasswordReset'=>'Password Reset',
    'ResetToken'=>'Reset Token',
    'RepeatPassword'=>'Repeat Password',
    'Submit'=>'Submit',
    'ProfileDetails'=>'Profile Details',
    'LastLogin'=>'Last Login',
    'ChangePassword'=>'Change Password',
    'CurrentPassword'=>'Current Password',
    'NewPassword'=>'New Password',
    'ConfirmPassword'=>'Confirm Password',
    'ConfigureRiskFormula'=>'Configure Risk Formula',
    'ConfigureReviewSettings'=>'Configure Review Settings',
    'AddAndRemoveValues'=>'Add and Remove Values',
    'UserManagement'=>'User Management',
    'RedefineNamingConventions'=>'Redefine Naming Conventions',
    'AuditTrail'=>'Audit Trail',
    'Extras'=>'Extras',
    'Announcements'=>'Announcements',
    'About'=>'About',
    'Impact'=>'Impact',
    'Likelihood'=>'Likelihood',
    'MitigationEffort'=>'Mitigation Effort',
    'Change'=>'Change',
    'to'=>'to',
    'AddANewUser'=>'Add a New User',
    'Type'=>'Type',
    'FullName'=>'Full Name',
    'EmailAddress'=>'E-mail Address',
    'Teams'=>'Team(s)',
    'ALL'=>'ALL',
    'NONE'=>'NONE',
    'UserResponsibilities'=>'User Responsibilities',
    'AbleToSubmitNewRisks'=>'Able to Submit New Risks',
    'AbleToModifyExistingRisks'=>'Able to Modify Existing Risks',
    'AbleToCloseRisks'=>'Able to Close Risks',
    'AbleToPlanMitigations'=>'Able to Plan Mitigations',
    'AbleToReviewLowRisks'=>'Able to Review Low Risks',
    'AbleToReviewMediumRisks'=>'Able to Review Medium Risks',
    'AbleToReviewHighRisks'=>'Able to Review High Risks',
    'AllowAccessToConfigureMenu'=>'Allow Access to "Configure" Menu',
    'MultiFactorAuthentication'=>'Multi-Factor Authentication',
    'None'=>'None',
    'Add'=>'Add',
    'ViewDetailsForUser'=>'View Details for User',
    'DetailsForUser'=>'Details for User',
    'Select'=>'Select',
    'EnableAndDisableUsers'=>'Enable and Disable Users',
    'EnableAndDisableUsersHelp'=>'Use this feature to enable or disable user logins while maintaining the audit trail of user activities',
    'DisableUser'=>'Disable user',
    'Disable'=>'Disable',
    'EnableUser'=>'Enable user',
    'Enable'=>'Enable',
    'DeleteAnExistingUser'=>'Delete an Existing User',
    'DeleteCurrentUser'=>'Delete current user',
    'Delete'=>'Delete',
    'SendPasswordResetEmailForUser'=>'Send password reset email for user',
    'Category'=>'Category',
    'AddNewCategoryNamed'=>'Add new category named',
    'DeleteCurrentCategoryNamed'=>'Delete current category named',
    'Team'=>'Team',
    'AddNewTeamNamed'=>'Add new team named',
    'DeleteCurrentTeamNamed'=>'Delete current team named',
    'Technology'=>'Technology',
    'AddNewTechnologyNamed'=>'Add new technology named',
    'DeleteCurrentTechnologyNamed'=>'Delete current technology named',
    'SiteLocation'=>'Site/Location',
    'AddNewSiteLocationNamed'=>'Add new site/location named',
    'DeleteCurrentSiteLocationNamed'=>'Delete current site/location named',
    'ControlRegulation'=>'Control Regulation',
    'AddNewControlRegulationNamed'=>'Add new control regulation named',
    'DeleteCurrentControlRegulationNamed'=>'Delete current control regulation named',
    'RiskPlanningStrategy'=>'Risk Planning Strategy',
    'AddNewRiskPlanningStrategyNamed'=>'Add new risk planning strategy named',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Delete current risk planning strategy named',
    'CloseReason'=>'Close Reason',
    'AddNewCloseReasonNamed'=>'Add new close reason named',
    'DeleteCurrentCloseReasonNamed'=>'Delete current close reason named',
    'IWantToReviewHighRiskEvery'=>'I want to review HIGH risk every',
    'IWantToReviewMediumRiskEvery'=>'I want to review MEDIUM risk every',
    'IWantToReviewLowRiskEvery'=>'I want to review LOW risk every',
    'days'=>'days',
    'MyClassicRiskFormulaIs'=>'My Classic Risk Formula Is',
    'RISK'=>'RISK',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'I consider HIGH risk to be anything greater than',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'I consider MEDIUM risk to be less than above, but greater than',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'I consider LOW risk to be less than above, but greater than',
    'HighRisk'=>'High Risk',
    'MediumRisk'=>'Medium Risk',
    'LowRisk'=>'Low Risk',
    'Irrelevant'=>'Irrelevant',
    'SubmitYourRisks'=>'Submit Risk',
    'PlanYourMitigations'=>'Plan Mitigation',
    'PerformManagementReviews'=>'Perform Reviews',
    'PrioritizeForProjectPlanning'=>'Plan Projects',
    'ReviewRisksRegularly'=>'Review Regularly',
    'DocumentANewRisk'=>'Document a New Risk',
    'UseThisFormHelp'=>'Use this form in order to document a new risk for consideration in the Risk Management Process',
    'Subject'=>'Subject',
    'ExternalReferenceId'=>'External Reference ID',
    'ControlNumber'=>'Control Number',
    'Owner'=>'Owner',
    'OwnersManager'=>'Owner’s Manager',
    'RiskScoringMethod'=>'Risk Scoring Method',
    'CurrentLikelihood'=>'Current Likelihood',
    'CurrentImpact'=>'Current Impact',
    'RiskAssessment'=>'Risk Assessment',
    'AdditionalNotes'=>'Additional Notes',
    'UNREVIEWED'=>'UNREVIEWED',
    'PASTDUE'=>'PAST DUE',
    'ID'=>'ID',
    'Status'=>'Status',
    'Risk'=>'Risk',
    'DaysOpen'=>'Days Open',
    'CalculatedRisk'=>'Calculated Risk',
    'SubmittedBy'=>'Submitted By',
    'NextReviewDate'=>'Next Review Date',
    'CVSSRiskScoring'=>'CVSS Risk Scoring',
    'DREADRiskScoring'=>'DREAD Risk Scoring',
    'OWASPRiskScoring'=>'OWASP Risk Scoring',
    'CustomRiskScoring'=>'Custom Risk Scoring',
    'MitigationPlanningHelp'=>'Below is the list of submitted risks that require mitigation planning',
    'ManagementReviewHelp'=>'Below is the list of submitted risks that require a management review',
    'Submitted'=>'Submitted',
    'MitigationPlanned'=>'Mitigation Planned',
    'ManagementReview'=>'Management Review',
    'No'=>'No',
    'Yes'=>'Yes',
    'AddAndRemoveProjects'=>'Add and Remove Projects',
    'AddAndRemoveProjectsHelp'=>'Add and remove projects in order to associate multiple risks together for prioritization',
    'AddNewProjectNamed'=>'Add new project named',
    'DeleteCurrentProjectNamed'=>'Delete current project named',
    'AddUnassignedRisksToProjects'=>'Add Unassigned Risks to Projects',
    'AddUnassignedRisksToProjectsHelp'=>'Drag and drop unassigned risks marked for consideration as a project into the appropriate project tab',
    'PrioritizeProjects'=>'Prioritize Projects',
    'PrioritizeProjectsHelp'=>'Move projects around and change the order of prioritization.  Once finished, don\'t forget to press the "Update" button to save your changes',
    'SaveRisksToProjects'=>'Save Risks to Projects',
    'RiskId'=>'Risk ID',
    'RiskActions'=>'Actions',
    'ReopenRisk'=>'Reopen Risk',
    'CloseRisk'=>'Close Risk',
    'EditRisk'=>'Edit Risk',
    'PlanAMitigation'=>'Plan a Mitigation',
    'PerformAReview'=>'Perform a Review',
    'AddAComment'=>'Add a Comment',
    'ShowRiskScoringDetails'=>'View Risk Scoring Details',
    'HideRiskScoringDetails'=>'Hide Risk Scoring Details',
    'Details'=>'Details',
    'SubmissionDate'=>'Submission Date',
    'DateSubmitted'=>'Date Submitted',
    'EditDetails'=>'Edit Details',
    'Mitigation'=>'Mitigation',
    'MitigationDate'=>'Mitigation Date',
    'PlanningStrategy'=>'Planning Strategy',
    'CurrentSolution'=>'Current Solution',
    'SecurityRequirements'=>'Security Requirements',
    'SecurityRecommendations'=>'Security Recommendations',
    'EditMitigation'=>'Edit Mitigation',
    'LastReview'=>'Last Review',
    'ReviewDate'=>'Review Date',
    'Reviewer'=>'Reviewer',
    'Review'=>'Review',
    'NextStep'=>'Next Step',
    'Comments'=>'Comments',
    'ViewAllReviews'=>'View All Reviews',
    'ReviewHistory'=>'Review History',
    'Comment'=>'Comment',
    'ClassicRiskScoring'=>'Classic Risk Scoring',
    'RiskScoringActions'=>'Risk Scoring Actions',
    'UpdateClassicScore'=>'Update Classic Score',
    'ScoreBy'=>'Score by',
    'RISKClassicExp1'=>'RISK = ( Likelihood x Impact + 2(Impact) )',
    'RISKClassicExp2'=>'RISK = ( Likelihood x Impact + Impact )',
    'RISKClassicExp3'=>'RISK = ( Likelihood x Impact )',
    'RISKClassicExp4'=>'RISK = ( Likelihood x Impact + Likelihood )',
    'RISKClassicExp5'=>'RISK = ( Likelihood x Impact + 2(Likelihood) )',
    'Reason'=>'Reason',
    'CloseOutInformation'=>'Close-Out Information',
    'SubmitManagementReview'=>'Submit Management Review',
    'SubmitRiskMitigation'=>'Submit Risk Mitigation',
    'RiskDashboard'=>'Risk Dashboard',
    'RiskTrend'=>'Risk Trend',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'All Open Risks Assigned to Me',
    'AllOpenRisksByRiskLevel'=>'All Open Risks by Risk Level',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'All Open Risks Considered for Projects by Risk Level',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'All Open Risks Accepted Until Next Review by Risk Level',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'All Open Risks to Submit as a Production Issue by Risk Level',
    'AllOpenRisksByScoringMethod'=>'All Open Risks by Scoring Method',
    'AllClosedRisksByRiskLevel'=>'All Closed Risks by Risk Level',
    'SubmittedRisksByDate'=>'Submitted Risks By Date',
    'MitigationsByDate'=>'Mitigations By Date',
    'ManagementReviewsByDate'=>'Management Reviews By Date',
    'ProjectsAndRisksAssigned'=>'Projects and Risks Assigned',
    'OpenRisks'=>'Open Risks',
    'ClosedRisks'=>'Closed Risks',
    'ReportMyOpenHelp'=>'This report shows all open risks that have the current user as the owner or manager associated with the risk ordered by risk level',
    'ReportOpenHelp'=>'This report shows all open risks ordered by risk level',
    'ReportProjectsHelp'=>'This report shows all open risks considered for projects ordered by risk level',
    'ReportNextReviewHelp'=>'This report shows all open risks accepted until next review ordered by risk level',
    'ReportProductionIssuesHelp'=>'This report shows all open risks submitted as production issues ordered by risk level',
    'ReportRiskScoringHelp'=>'This report shows all risk scoring methods and the risks scored using each',
    'ReportClosedHelp'=>'This report shows all closed risks ordered by risk level',
    'ReportSubmittedByDateHelp'=>'This report shows all risks ordered by submission date',
    'ReportMitigationsByDateHelp'=>'This report shows all mitigations planned ordered by mitigation date',
    'ReportMgmtReviewsByDateHelp'=>'This report shows all management reviews ordered by review date',
    'ReportProjectsAndRisksHelp'=>'This report shows all projects and the risks assigned to them',
    'Language'=>'Language',
    'AllOpenRisksNeedingReview'=>'All Open Risks Needing a Review',
    'ReportReviewNeededHelp'=>'This report shows all open risks needing a management review',
    'CustomValue'=>'Custom Value',
    'ClosedRisksByDate'=>'Closed Risks By Date',
    'DateClosed'=>'Date Closed',
    'ClosedBy'=>'Closed By',
    'ReportClosedByDateHelp'=>'This report shows all risks ordered by closure date',
    'AllOpenRisksByTeam'=>'All Open Risks by Team',
    'ReportRiskTeamsHelp'=>'This report shows all teams and the risks assigned to each',
    'Unassigned'=>'Unassigned',
    'AllOpenRisksByTechnology'=>'All Open Risks By Technology',
    'ReportRiskTechnologiesHelp'=>'This report shows all technologies and the risks assigned to each',
    'RiskLevel'=>'Risk Level',
    'BasedOnTheCurrentRiskScore'=>'Based on your Risk Score, your next review date will be ',
    'WouldYouLikeToUseADifferentDate'=>'Would you like to use a different date instead?',
    'RisksOpenedAndClosedOverTime'=>'Risks Opened and Closed Over Time',
    'AllRiskScoresAreAdjusted'=>'All risk scores are adjusted to fit on a 0-10 scale.',
    'DetermineProjectStatus'=>'Determine Project Status',
    'ProjectStatusHelp'=>'Place projects into buckets based on their current status.',
    'ActiveProjects'=>'Active Projects',
    'OnHoldProjects'=>'On Hold Projects',
    'CompletedProjects'=>'Completed Projects',
    'CancelledProjects'=>'Cancelled Projects',
    'UpdateProjectStatuses'=>'Update Project Statuses',
    'HighRiskReport'=>'High Risk Report',
    'TotalOpenRisks'=>'Total Open Risks',
    'TotalHighRisks'=>'Total High Risks',
    'HighRiskPercentage'=>'High Risk Percentage',
    'UpdateClassicScore'=>'Update Classic Score',
    'CurrentLikelihood'=>'Current Likelihood',
    'CurrentImpact'=>'Current Impact',   
    'UpdateCVSSScore'=>'Update CVSS Score',
    'BaseScoreMetrics'=>'Base Score Metrics',
    'AttackVector'=>'Attack Vector',
    'AttackComplexity'=>'Attack Complexity',
    'Authentication'=>'Authentication',
    'ConfidentialityImpact'=>'Confidentiality Impact',
    'IntegrityImpact'=>'Integrity Impact',
    'AvailabilityImpact'=>'Availability Impact',
    'TemporalScoreMetrics'=>'Temporal Score Metrics',
    'Exploitability'=>'Exploitability',
    'RemediationLevel'=>'Remediation Level',
    'ReportConfidence'=>'Report Confidence',
    'EnvironmentalScoreMetrics'=>'Environmental Score Metrics',
    'CollateralDamagePotential'=>'Collateral Damage Potential',
    'TargetDistribution'=>'Target Distribution',
    'ConfidentialityRequirement'=>'Confidentiality Requirement',
    'IntegrityRequirement'=>'Integrity Requirement',
    'AvailabilityRequirement'=>'Availability Requirement',
    'UpdateDREADScore'=>'Update DREAD Score',
    'DamagePotential'=>'Damage Potential',
    'Reproducibility'=>'Reproducibility',
    'AffectedUsers'=>'Affected Users',
    'Discoverability'=>'Discoverability',
    'UpdateOWASPScore'=>'Update OWASP Score',
    'ThreatAgentFactors'=>'Threat Agent Factors',
    'SkillLevel'=>'Skill Level',
    'Motive'=>'Motive',
    'Opportunity'=>'Opportunity',
    'Size'=>'Size',
    'VulnerabilityFactors'=>'Vulnerability Factors',
    'EaseOfDiscovery'=>'Ease of Discovery',
    'EaseOfExploit'=>'Ease of Exploit',
    'Awareness'=>'Awareness',
    'IntrusionDetection'=>'Intrusion Detection',
    'TechnicalImpact'=>'Technical Impact',
    'LossOfConfidentiality'=>'Loss of Confidentiality',
    'LossOfIntegrity'=>'Loss of Integrity',
    'LossOfAvailability'=>'Loss of Availability',
    'LossOfAccountability'=>'Loss of Accountability',
    'BusinessImpact'=>'Business Impact',
    'FinancialDamage'=>'Financial Damage',
    'ReputationDamage'=>'Reputation Damage',
    'NonCompliance'=>'Non-Compliance',
    'PrivacyViolation'=>'Privacy Violation',
    'UpdateCustomScore'=>'Update Custom Score',
    'ManuallyEnteredValue'=>'Manually Entered Value',
    'ScoreByClassic'=>'Score by Classic',
    'ScoreByCVSS'=>'Score by CVSS',
    'ScoreByDREAD'=>'Score by DREAD',
    'ScoreByOWASP'=>'Score by OWASP',
    'ScoreByCustom'=>'Score by Custom',
    'BaseVector'=>'Base Vector',
    'TemporalVector'=>'Temporal Vector',
    'EnvironmentalVector'=>'Environmental Vector',
    'SupportingDocumentation'=>'Supporting Documentation',
    'Import'=>'Import',
    'Export'=>'Export',
    'ActivateTheImportExportExtra'=>'Activate the Import/Export Extra',
    'PrintableView'=>'Printable View',
    'GroupBy'=>'Group By',
    'IncludedColumns'=>'Included Columns',
    'AllRisks'=>'All Risks',
    'DynamicRiskReport'=>'Dynamic Risk Report',
    'ObsoleteReports'=>'Obsolete Reports',
    'Project'=>'Project',
    'SortBy'=>'Sort By',
    'MonthSubmitted'=>'Month Submitted',
    'AssetManagement'=>'Asset Management',
    'AutomatedDiscovery'=>'Automated Discovery',
    'BatchImport'=>'Batch Import',
    'ManageAssets'=>'Manage Assets',
    'AssetValuation'=>'Asset Valuation',
    'AllowAccessToAssetManagementMenu'=>'Allow Access to "Asset Management" Menu',
    'AutomatedDiscoveryHelp'=>'Discover all live IP addresses in the entered IP range.  Live IP addresses will be added to the asset list.  Acceptable formats:',
    'IPRange'=>'IP Range',
    'Search'=>'Search',
    'AddANewAsset'=>'Add a New Asset',
    'DeleteAnExistingAsset'=>'Delete an Existing Asset',
    'AssetName'=>'Asset Name',
    'IPAddress'=>'IP Address',
    'AssetWasAddedSuccessfully'=>'Asset was added successfully.',
    'AssetWasDeletedSuccessfully'=>'Asset was deleted successfully.',
    'ThereWasAProblemAddingTheAsset'=>'There was a problem adding the asset.',
    'ThereWasAProblemDeletingTheAsset'=>'There was a problem deleting the asset.',
    'ComingSoon'=>'Coming Soon',
    'ExportRisks'=>'Export Risks',
    'ExportMitigations'=>'Export Mitigations',
    'ExportReviews'=>'Export Reviews',
    'ExportCombined'=>'Export Combined',
    'MitigatedBy'=>'Mitigated By',
    'MitigationId'=>'Mitigation ID',
    'ReviewId'=>'Review ID',
    'AffectedAssets'=>'Affected Assets',
    'Activate'=>'Activate',
    'DeleteRisks'=>'Delete Risks',
    'DeletedRisksCannotBeRecovered'=>'Deleted Risks Cannot Be Recovered',
    'RisksDeletedSuccessfully'=>'Risk(s) Deleted Successfully',
    'ThereWasAProblemDeletingTheRisk'=>'There Was a Problem Deleting the Risk(s)',
    'Activated'=>'ACTIVATED',
    'IWantToReviewInsignificantRiskEvery'=>'I want to review INSIGNIFICANT risk every',
    'Insignificant'=>'Insignificant',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'I consider VERY HIGH risk to be anything greater than',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'I consider HIGH risk to be less than above, but greater than',
    'VeryHigh'=>'Very High',
    'VeryHighRisk'=>'Very High Risk',
    'IWantToReviewVeryHighRiskEvery'=> 'I want to review VERY HIGH risk every',
    'AbleToReviewVeryHighRisks'=>'Able to Review Very High Risks',
    'AbleToReviewInsignificantRisks'=>'Able to Review Insignificant Risks',
    'TotalVeryHighRisks'=>'Total Very High Risks',
    'VeryHighRiskPercentage'=>'Very High Risk Percentage',
    'AllTeams'=>'All Teams',
    'FileUploadSettings'=>'File Upload Settings',
    'AllowedFileTypes'=>'Allowed File Types',
    'AddNewFileTypeOf'=>'Add new file type of',
    'DeleteCurrentFileTypeOf'=>'Delete current file type of',
    'MaximumUploadFileSize'=>'Maximum Upload File Size',
    'Bytes'=>'Bytes',
    'CheckAll'=>'Check All',
    'CheckAllRiskMgmt'=>'Check All Risk Management',
    'CheckAllAssetMgmt'=>'Check All Asset Management',
    'CheckAllConfigure'=>'Check All Configure',
    'MitigationTeam'=>'Mitigation Team',
    'ImportRisks'=>'Import Risks',
    'ImportAssets'=>'Import Assets',
    'AssetValue'=>'Asset Value',
    'Register'=>'Register',
    'RegisterSimpleRisk'=>'Register SimpleRisk',
    'RegistrationText'=>'By registering SimpleRisk you will be providing your contact information so that you can be updated with the latest release information and important security notifications.  Your information will never be sold to a third-party.  Registered instances also have the ability to be backed up and upgraded with the click of a button.',
    'RegistrationInformation'=>'Registration Information',
    'Company'=>'Company',
    'JobTitle'=>'Job Title',
    'Phone'=>'Phone',
    'UpgradeSimpleRisk'=>'Upgrade SimpleRisk',
    'UpgradeInstructions'=>'This section uses the Upgrade Extra.  To make sure you have the latest version, select "Update", re-register, and reload this page.',
    'NoUpgradeNeeded'=>'No upgrade is needed at this time.',
    'BackupDatabase'=>'Backup the Database',
    'UpgradeApplication'=>'Upgrade the Application',
    'UpgradeDatabase'=>'Upgrade the Database',
    'CustomExtras'=>'Custom Extras',
    'CustomExtrasText'=>'It would be awesome if everything were free, right?  Hopefully the core SimpleRisk platform is able to serve all of your risk management needs.  But, if you find yourself still wanting more functionality, we\'ve developed a series of "Extras" that will do just that.',
    'Upgrade'=>'Upgrade',
    'Install'=>'Install',
    'Purchase'=>'Purchase',
    'PasswordPolicy'=>'Password Policy',
    'MinimumNumberOfCharacters'=>'Minimum Number of Characters',
    'RequireAlphaCharacter'=>'Require Alpha Character',
    'RequireUpperCaseCharacter'=>'Require Upper Case Character',
    'RequireLowerCaseCharacter'=>'Require Lower Case Character',
    'RequireNumericCharacter'=>'Require Numeric Character',
    'RequireSpecialCharacter'=>'Require Special Character',
    'Enabled'=>'Enabled',
    'RiskPyramid'=>'Risk Pyramid',
    'RiskPyramidDescription'=>'The risk pyramid above helps to show the distribution of risks amongst the various risk levels.  A top heavy pyramid can be a sign that your organization is taking on too much risk.',
    'RiskAdvice'=>'Risk Advice',
    'AddDeleteAssets'=>'Add & Delete Assets',
    'EditAssets'=>'Edit Assets',
    'AutomaticAssetValuation'=>'Automatic Asset Valuation',
    'ManualAssetValuation'=>'Manual Asset Valuation',
    'MinimumValue'=>'Minimum Value',
    'MaximumValue'=>'Maximum Value',
    'ValueRange'=>'Value Range',
    'DefaultAssetValuation'=>'Default Asset Valuation',
    'Default'=>'Default',
    'RisksAndAssets'=>'Risks and Assets',
    'Report'=>'Report',
    'RisksByAsset'=>'Risks by Asset',
    'AssetsByRisk'=>'Assets by Risk',
    'MaximumQuantitativeLoss'=>'Maximum Quantitative Loss',
    'MitigationOwner'=>'Mitigation Owner',
    'MitigationCost'=>'Mitigation Cost',
    'RiskColumns'=>'Risk Columns',
    'MitigationColumns'=>'Mitigation Columns',
    'ReviewColumns'=>'Review Columns',
    'ChangeStatus'=>'Change Status',
    'SetRiskStatusTo'=>'Set Risk Status To',
    'AddNewStatusNamed'=>'Add new status named',
    'DeleteStatusNamed'=>'Delete status named',
    'DefaultCurrencySymbol'=>'Default Currency Symbol',
    'DefaultValues'=>'Default Values',
    'RiskSource'=>'Risk Source',
    'AddNewSourceNamed'=>'Add new source named',
    'DeleteSourceNamed'=>'Delete source named',
    'CheckAllAssessments'=>'Check All Assessments',
    'AllowAccessToAssessmentsMenu'=>'Allow Access to "Assessments" Menu',
    'Assessments'=>'Assessments',
    'AvailableAssessments'=>'Available Assessments',
    'PendingRisks'=>'Pending Risks',
    'CreateAssessment'=>'Create Assessment',
    'EditAssessment'=>'Edit Assessment',
    'Overview'=>'Overview',
    'OpenVsClosed'=>'Open vs Closed',
    'MitigatedVsUnmitigated'=>'Mitigated vs Unmitigated',
    'ReviewedVsUnreviewed'=>'Reviewed vs Unreviewed',
    'OpenedRisks'=>'Opened Risks',
    'MailSettings'=>'Mail Settings',
    'TransportAgent'=>'Transport Agent',
    'FromName'=>'From Name',
    'FromEmail'=>'From Email',
    'ReplyToName'=>'ReplyTo Name',
    'ReplyToEmail'=>'ReplyTo Email',
    'Host'=>'Host',
    'SMTPAuthentication'=>'SMTP Authentication',
    'Encryption'=>'Encryption',
    'Port'=>'Port',
    'Next'=>'Next',
    'NewAssessmentQuestion'=>'New Assessment Question',
    'Question'=>'Question',
    'RiskScore'=>'Risk Score',
    'SubmitRisk'=>'Submit Risk',
    'Answer'=>'Answer',
    'AddQuestion'=>'Add Question',
    'SaveAssessment'=>'Save Assessment',
    'SendAssessment'=>'Send Assessment',
    'DeleteAssessment'=>'Delete Assessment',
    'AssessmentName'=>'Assessment Name',
    'SendTo'=>'Send To',
    'ActiveAssessments'=>'Active Assessments',
    'SentTo'=>'Sent To',
    'From'=>'From',
    'Key'=>'Key',
    'GoToSSOLoginPage'=>'Go to SSO Login Page',
    'APIKey'=>'API Key',
    'GenerateAPIKey'=>'Generate API Key',
    'RotateAPIKey'=>'Rotate API Key',
    'InvalidateAPIKey'=>'Invalidate API Key',
    'Deactivate'=>'Deactivate',
    'ImportExportExtra'=>'Import-Export Extra',
    'SaveDetails'=>'Save Details',
    'ClearForm'=>'Clear Form',
    'SaveMitigation'=>'Save Mitigation',
    'Cancel'=>'Cancel',
    'SubmitReview'=>'Submit Review',
    'UnassignedRisks'=>'Unassigned Risks',
    'DisableRegistrationNotice'=>'Disable Registration Notice',
    ''=>'',
);

?>
