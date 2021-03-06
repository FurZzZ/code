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
    'Home'=>'Về nhà',
    'RiskManagement'=>'Đi Quản Lý Rủi Ro',
    'Reporting'=>'Báo cáo',
    'Configure'=>'Cấu',
    'MyProfile'=>'Hồ Sơ Của Tôi',
    'Logout'=>'Khi thoát',
    'LogInHere'=>'Ghi Ở Đây',
    'Username'=>'Người dùng',
    'Password'=>'Mật khẩu',
    'ForgotYourPassword'=>'Quên mật khẩu của ông',
    'Login'=>'Đăng nhập',
    'Reset'=>'Đặt lại',
    'Send'=>'Đưa',
    'Update'=>'Cập nhật',
    'SendPasswordResetEmail'=>'Đưa Khẩu Lại Email',
    'PasswordReset'=>'Mật Khẩu Lại',
    'ResetToken'=>'Đặt Lại Lời',
    'RepeatPassword'=>'Nhắc Lại Mật Khẩu',
    'Submit'=>'Đưa',
    'ProfileDetails'=>'Hồ Sơ Chi Tiết',
    'LastLogin'=>'Cuối Cùng Nhập',
    'ChangePassword'=>'Thay Đổi Mật Khẩu',
    'CurrentPassword'=>'Hiện Có Mật Khẩu',
    'NewPassword'=>'Mật Khẩu Mới',
    'ConfirmPassword'=>'Xác Nhận Mật Khẩu',
    'ConfigureRiskFormula'=>'Cấu Hình Thức Mạo Hiểm',
    'ConfigureReviewSettings'=>'Cấu Hình Xem Lại Thiết Lập',
    'AddAndRemoveValues'=>'Thêm và Bỏ giá Trị',
    'UserManagement'=>'Dùng Quản Lý',
    'RedefineNamingConventions'=>'Redefine Tiến Cử Quy Tắc ... ',
    'AuditTrail'=>'Kiểm Toán Dấu Vết',
    'Extras'=>'Di chúc',
    'Announcements'=>'Thông báo gì cả',
    'About'=>'Về',
    'Impact'=>'Va chạm',
    'Likelihood'=>'Hạt',
    'MitigationEffort'=>'Mitigation Nỗ Lực',
    'Change'=>'Thay đổi',
    'to'=>'phải',
    'AddANewUser'=>'Thêm người Dùng',
    'Type'=>'Gõ',
    'FullName'=>'Tên Đầy Đủ',
    'EmailAddress'=>'Địa chỉ E-mail',
    'Teams'=>'Đội(s)',
    'ALL'=>'Tất CẢ những',
    'NONE'=>'KHÔNG ai',
    'UserResponsibilities'=>'Dùng Trách Nhiệm',
    'AbleToSubmitNewRisks'=>'Có thể khuất phục Mới Hiểm',
    'AbleToModifyExistingRisks'=>'Có thể Sửa đổi Bộ Hiểm',
    'AbleToCloseRisks'=>'Có thể tới Gần nguy Hiểm',
    'AbleToPlanMitigations'=>'Có thể kế Hoạch Mitigations',
    'AbleToReviewLowRisks'=>'Có thể Xem xét lại Thấp sự nguy Hiểm',
    'AbleToReviewMediumRisks'=>'Có thể Xem xét lại Chứa rủi Ro',
    'AbleToReviewHighRisks'=>'Có thể Xem xét lại Cao sự nguy Hiểm',
    'AllowAccessToConfigureMenu'=>'Cho phép Truy cập "Cấu" Đơn',
    'MultiFactorAuthentication'=>'Đa-Tố Xác Thực',
    'None'=>'Không ai',
    'Add'=>'Thêm',
    'ViewDetailsForUser'=>'Xem chi Tiết cho người Dùng',
    'DetailsForUser'=>'Chi tiết cho người Dùng',
    'Select'=>'Chọn',
    'EnableAndDisableUsers'=>'Bật và Tắt người Dùng',
    'EnableAndDisableUsersHelp'=>'Dùng cái này chức năng để những hoặc tắt dùng đăng nhập trong khi bảo trì kiểm toán tìm dấu tích của người dùng hành động này lại.',
    'DisableUser'=>'Tắt dùng',
    'Disable'=>'Tắt',
    'EnableUser'=>'Bật dùng',
    'Enable'=>'Bật',
    'DeleteAnExistingUser'=>'Xoá một Tập Dùng',
    'DeleteCurrentUser'=>'Xoá hiện có người dùng',
    'Delete'=>'Xoá',
    'SendPasswordResetEmailForUser'=>'Đưa khẩu lại thư cho người dùng',
    'Category'=>'Phân loại',
    'AddNewCategoryNamed'=>'Thêm phân loại mới có tên là',
    'DeleteCurrentCategoryNamed'=>'Xoá hiện có loại tên',
    'Team'=>'Đội',
    'AddNewTeamNamed'=>'Thêm mới đặt tên cho đội',
    'DeleteCurrentTeamNamed'=>'Xoá hiện nhóm có tên là',
    'Technology'=>'Công nghệ',
    'AddNewTechnologyNamed'=>'Thêm công nghệ mới có tên là',
    'DeleteCurrentTechnologyNamed'=>'Xoá hiện công nghệ tên',
    'SiteLocation'=>'Nơi/Địa Điểm',
    'AddNewSiteLocationNamed'=>'Thêm trang web mới/địa điểm đặt tên',
    'DeleteCurrentSiteLocationNamed'=>'Xoá hiện trường/địa điểm đặt tên',
    'ControlRegulation'=>'Điều Khiển Nguyên Tắc',
    'AddNewControlRegulationNamed'=>'Thêm mới điều khiển nguyên tắc tên',
    'DeleteCurrentControlRegulationNamed'=>'Xoá hiện điều khiển nguyên tắc tên',
    'RiskPlanningStrategy'=>'Nguy Hiểm Lập Kế Hoạch Chiến Lược',
    'AddNewRiskPlanningStrategyNamed'=>'Thêm mới mạo hiểm lên kế hoạch chiến thuật tên',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Xoá hiện mạo hiểm lên kế hoạch chiến thuật tên',
    'CloseReason'=>'Gần Lý Do',
    'AddNewCloseReasonNamed'=>'Thêm mới gần lý do tên',
    'DeleteCurrentCloseReasonNamed'=>'Xoá hiện gần lý do tên',
    'IWantToReviewHighRiskEvery'=>'Tôi muốn xem xét CAO liều mỗi',
    'IWantToReviewMediumRiskEvery'=>'Tôi muốn xem xét VỪA liều mỗi',
    'IWantToReviewLowRiskEvery'=>'Tôi muốn xem xét THẤP liều mỗi',
    'days'=>'ngày',
    'MyClassicRiskFormulaIs'=>'Tôi Điển Công Thức Là Nguy Hiểm',
    'RISK'=>'NGUY hiểm',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Tôi xem CAO mạo hiểm mọi thứ còn tuyệt hơn',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Tôi xem CHỨA rủi ro là ít hơn ở trên, nhưng lớn hơn',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Tôi xem THẤP mạo hiểm được ít hơn ở trên, nhưng lớn hơn',
    'HighRisk'=>'Cao Mạo Hiểm',
    'MediumRisk'=>'Vừa Nguy Hiểm',
    'LowRisk'=>'Thấp Mạo Hiểm',
    'Irrelevant'=>'Không liên quan,',
    'SubmitYourRisks'=>'Thảo Hiểm',
    'PlanYourMitigations'=>'Kế Hoạch Của Mitigations',
    'PerformManagementReviews'=>'Làm Quản Lý Những Bài Phê Bình',
    'PrioritizeForProjectPlanning'=>'Sắp xếp cho kế Hoạch dự Án',
    'ReviewRisksRegularly'=>'Xem Hiểm Thường Xuyên',
    'DocumentANewRisk'=>'Tài liệu Mới mạo hiểm',
    'UseThisFormHelp'=>'Dùng hình hài này để có tài liệu mới nguy hiểm vì xúi trong đi quản lý rủi Ro quá Trình',
    'Subject'=>'Chủ đề',
    'ExternalReferenceId'=>'Bên ngoài có liên quan gì thẻ căn CƯỚC',
    'ControlNumber'=>'Kiểm Soát Số',
    'Owner'=>'Chủ',
    'OwnersManager'=>'Chủ Quản lý',
    'RiskScoringMethod'=>'Nguy Hiểm Là Những Vấn Đề Khác Phương Pháp',
    'CurrentLikelihood'=>'Hiện Tại Hạt',
    'CurrentImpact'=>'Hiện Va Chạm',
    'RiskAssessment'=>'Đánh Giá Nguy Hiểm',
    'AdditionalNotes'=>'Thêm Ghi Chép.',
    'UNREVIEWED'=>'UNREVIEWED',
    'PASTDUE'=>'QUÁ KHỨ DO',
    'ID'=>'Thẻ căn CƯỚC',
    'Status'=>'Tình trạng',
    'Risk'=>'Nguy hiểm',
    'DaysOpen'=>'Ngày Mở',
    'CalculatedRisk'=>'Tôi Luôn Tính Đến Những Nguy Hiểm',
    'SubmittedBy'=>'Gửi Đi Bằng',
    'NextReviewDate'=>'Sau Bài Bình Luận Hẹn Hò',
    'CVSSRiskScoring'=>'CVSS mạo hiểm Thắng',
    'DREADRiskScoring'=>'SỢ Nguy hiểm Thắng',
    'OWASPRiskScoring'=>'OWASP mạo hiểm Thắng',
    'CustomRiskScoring'=>'Tự Chọn Mạo Hiểm Thắng',
    'MitigationPlanningHelp'=>'Dưới đây là danh sách gửi rủi ro đó cần thiết kế hoạch mitigation',
    'ManagementReviewHelp'=>'Dưới đây là danh sách gửi rủi ro đó đang cần một người quản lý xét lại',
    'Submitted'=>'Gửi đi',
    'MitigationPlanned'=>'Mitigation Kế Hoạch',
    'ManagementReview'=>'Quản Lý Xét Lại',
    'No'=>'Không',
    'Yes'=>'Vâng',
    'AddAndRemoveProjects'=>'Thêm và Bỏ dự án',
    'AddAndRemoveProjectsHelp'=>'Thêm và bỏ dự án để cộng tác với nhiều nguy hiểm cùng nhau prioritization',
    'AddNewProjectNamed'=>'Thêm dự án mới có tên là',
    'DeleteCurrentProjectNamed'=>'Xoá hiện dự án tên',
    'AddUnassignedRisksToProjects'=>'Thêm Unassigned Hiểm để dự án',
    'AddUnassignedRisksToProjectsHelp'=>'Kéo và thả unassigned hiểm đánh dấu cho cân nhắc như một dự án vào thời điểm thích hợp để dự án thẻ',
    'PrioritizeProjects'=>'Sắp Xếp Kế Hoạch',
    'PrioritizeProjectsHelp'=>'Chuyển phát xung quanh và đổi mệnh lệnh của prioritization. Khi xong việc, đừng quên nhấn "Cập nhật" nút để cứu của anh thay đổi',
    'SaveRisksToProjects'=>'Cứu nguy Hiểm cho dự án',
    'RiskId'=>'Nhận dạng nguy hiểm',
    'RiskActions'=>'Liều Lĩnh Hành Động',
    'ReopenRisk'=>'Mở Lại Liều',
    'CloseRisk'=>'Gần Nguy Hiểm',
    'EditRisk'=>'Sửa Mạo Hiểm',
    'PlanAMitigation'=>'Kế hoạch một Mitigation',
    'PerformAReview'=>'Biểu diễn một Bài',
    'AddAComment'=>'Thêm một bình luận',
    'ShowRiskScoringDetails'=>'Cho Mạo Hiểm Thắng Chi Tiết',
    'HideRiskScoringDetails'=>'Trốn Mạo Hiểm Thắng Chi Tiết',
    'Details'=>'Chi tiết',
    'SubmissionDate'=>'Câm Đi Hẹn Hò',
    'DateSubmitted'=>'Hẹn Gửi Đi',
    'EditDetails'=>'Sửa Chi Tiết',
    'Mitigation'=>'Mitigation',
    'MitigationDate'=>'Mitigation Hẹn Hò',
    'PlanningStrategy'=>'Kế Hoạch Chiến Lược',
    'CurrentSolution'=>'Hiện Tại Giải Pháp',
    'SecurityRequirements'=>'Yêu Cầu An Ninh',
    'SecurityRecommendations'=>'An Ninh Đề Nghị Này',
    'EditMitigation'=>'Sửa Mitigation',
    'LastReview'=>'Bình Luận Cuối Cùng',
    'ReviewDate'=>'Xem Lại Ngày',
    'Reviewer'=>'Reviewer',
    'Review'=>'Xem xét lại',
    'NextStep'=>'Bước Tiếp Theo',
    'Comments'=>'Ý kiến',
    'ViewAllReviews'=>'Xem Tất Cả Các Bài Phê Bình',
    'ReviewHistory'=>'Xem Lại Lịch Sử',
    'Comment'=>'Bình luận',
    'ClassicRiskScoring'=>'Kinh Điển Thật Mạo Hiểm Thắng',
    'RiskScoringActions'=>'Nguy Hiểm Là Những Vấn Đề Khác Hành Động',
    'UpdateClassicScore'=>'Cập Nhật Cổ Điển Điểm',
    'ScoreBy'=>'Ghi điểm bằng',
    'RISKClassicExp1'=>'NGUY hiểm = ( Hạt x va chạm + 2(va chạm) )',
    'RISKClassicExp2'=>'NGUY hiểm = ( Hạt x va chạm + va chạm )',
    'RISKClassicExp3'=>'NGUY hiểm = ( Hạt x va chạm )',
    'RISKClassicExp4'=>'NGUY hiểm = ( Hạt x va chạm + Hạt )',
    'RISKClassicExp5'=>'NGUY hiểm = ( Hạt x va chạm + 2(Hạt) )',
    'Reason'=>'Lý do',
    'CloseOutInformation'=>'Cận Thông Tin',
    'SubmitManagementReview'=>'Đưa Quản Lý Xét Lại',
    'SubmitRiskMitigation'=>'Chấp Nhận Liều Lĩnh Mitigation',
    'RiskDashboard'=>'Nguy Hiểm Trạm',
    'RiskTrend'=>'Nguy Hiểm Phong Trào',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Mở cửa để Liều mình như Phân công làm việc với Tôi bằng Mức độ Nguy hiểm',
    'AllOpenRisksByRiskLevel'=>'Được Mở ra nhiều nguy Hiểm bằng Mức độ Nguy hiểm',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Mở cửa lại được Coi là nguy Hiểm cho dự án bởi Nguy Cấp',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Tất cả Mở chấp Nhận rủi Ro cho Tới tháng Xem xét qua Mức độ Nguy hiểm',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Tất cả Mở Hiểm để Đưa như một sản phẩm Chuẩn bị Nguy Cấp',
    'AllOpenRisksByScoringMethod'=>'Được Mở ra nhiều nguy Hiểm bằng Thắng phương pháp',
    'AllClosedRisksByRiskLevel'=>'Tất cả Đóng nhiều nguy Hiểm bằng Mức độ Nguy hiểm',
    'SubmittedRisksByDate'=>'Gửi Đi Hiểm Theo Ngày',
    'MitigationsByDate'=>'Mitigations Theo Ngày',
    'ManagementReviewsByDate'=>'Quản Lý Những Bài Phê Bình Theo Ngày',
    'ProjectsAndRisksAssigned'=>'Dự án và Liều Gán',
    'OpenRisks'=>'Mở Hiểm',
    'ClosedRisks'=>'Đóng Cửa Hiểm',
    'ReportMyOpenHelp'=>'Báo cáo cho thấy tất cả mở hiểm đó có hiện có người dùng như là chủ nhân hay người quản lý được gắn với rủi ro ra lệnh nguy cấp',
    'ReportOpenHelp'=>'Báo cáo cho thấy tất cả mở ra nguy hiểm như vừa ra lệnh nguy cấp',
    'ReportProjectsHelp'=>'Báo cáo cho thấy tất cả mở được coi là nguy hiểm cho dự án ra lệnh nguy cấp',
    'ReportNextReviewHelp'=>'Báo cáo cho thấy tất cả mở chấp nhận rủi ro cho tới tháng xem ra lệnh nguy cấp',
    'ReportProductionIssuesHelp'=>'Báo cáo cho thấy tất cả mở ra nguy hiểm như vừa gửi đi như sản xuất vấn đề ra lệnh nguy cấp',
    'ReportRiskScoringHelp'=>'Báo cáo cho thấy tất cả mạo hiểm thắng phương pháp và nguy hiểm như vừa được sử dụng mỗi',
    'ReportClosedHelp'=>'Báo cáo cho thấy tất cả đóng rủi ro ra lệnh nguy cấp',
    'ReportSubmittedByDateHelp'=>'Báo cáo cho thấy tất cả sự nguy hiểm ra lệnh tùng hẹn hò',
    'ReportMitigationsByDateHelp'=>'Báo cáo cho thấy tất cả mitigations kế hoạch ra lệnh mitigation hẹn hò',
    'ReportMgmtReviewsByDateHelp'=>'Báo cáo cho thấy tất cả ban quản lý mắt ra lệnh bài hẹn hò',
    'ReportProjectsAndRisksHelp'=>'Báo cáo cho thấy tất cả trong dự án và nguy hiểm như vừa được giao cho',
    'Language'=>'Ngôn ngữ',
    'AllOpenRisksNeedingReview'=>'Tất cả Mở Hiểm Cần một Bài',
    'ReportReviewNeededHelp'=>'Báo cáo cho thấy tất cả mở hiểm cần một người quản lý xét lại',
    'CustomValue'=>'Đặt Giá Trị',
    'ClosedRisksByDate'=>'Đóng Cửa Hiểm Theo Ngày',
    'DateClosed'=>'Ngày Đóng Cửa',
    'ClosedBy'=>'Đóng Lại Bởi',
    'ReportClosedByDateHelp'=>'Báo cáo cho thấy tất cả sự nguy hiểm ra lệnh đóng cửa ngày',
    'AllOpenRisksByTeam'=>'Tất cả Mở Hiểm bởi Đội',
    'ReportRiskTeamsHelp'=>'Báo cáo cho thấy tất cả các đội, và những rủi ro được gán cho mỗi',
    'Unassigned'=>'Unassigned',
    'AllOpenRisksByTechnology'=>'Tất Cả Mở Hiểm Bởi Công Nghệ',
    'ReportRiskTechnologiesHelp'=>'Báo cáo cho thấy tất cả những công nghệ và những rủi ro được gán cho mỗi',
    'RiskLevel'=>'Mức Độ Nguy Hiểm',
    'BasedOnTheCurrentRiskScore'=>'Dựa vào dòng nước nguy hiểm điểm, sau bài bình luận sẽ hẹn hò ',
    'WouldYouLikeToUseADifferentDate'=>'Ông có muốn dùng một cuộc hẹn khác thay thế không?',
    'RisksOpenedAndClosedOverTime'=>'Rủi ro đó Mở và Đóng cửa rồi thời Gian trôi Qua,',
    'AllRiskScoresAreAdjusted'=>'Tất cả điểm nguy hiểm đang điều chỉnh cho phù hợp với một 0-10 phóng.',
    'DetermineProjectStatus'=>'Xác Định Án Tình Trạng',
    'ProjectStatusHelp'=>'Nơi phát vào xô dựa trên những hiện trạng thái.',
    'ActiveProjects'=>'Hoạt Động Cho Những Dự Án',
    'OnHoldProjects'=>'Dừng Dự Án',
    'CompletedProjects'=>'Hoàn Tất Dự Án',
    'CancelledProjects'=>'Hủy Bỏ Kế Hoạch',
    'UpdateProjectStatuses'=>'Cập Nhật Dự Án Statuses',
    'HighRiskReport'=>'Cao Mạo Hiểm Báo Cáo',
    'TotalOpenRisks'=>'Tổng Mở Hiểm',
    'TotalHighRisks'=>'Tổng Cao Sự Nguy Hiểm',
    'HighRiskPercentage'=>'Cao Mạo Hiểm Phần Trăm',
    'UpdateClassicScore'=>'Cập Nhật Cổ Điển Điểm',
    'CurrentLikelihood'=>'Hiện Tại Hạt',
    'CurrentImpact'=>'Hiện Va Chạm',   
    'UpdateCVSSScore'=>'Cập nhật CVSS Điểm',
    'BaseScoreMetrics'=>'Căn Cứ Điểm Mình',
    'AttackVector'=>'Toạ Độ Tấn Công',
    'AttackComplexity'=>'Tấn Công Phức Tạp',
    'Authentication'=>'Xác thực',
    'ConfidentialityImpact'=>'Việc Giữ Bí Mật Va Chạm',
    'IntegrityImpact'=>'Sự Chính Trực Có Sự Va Chạm',
    'AvailabilityImpact'=>'Có Sẵn Va Chạm',
    'TemporalScoreMetrics'=>'Thời Điểm Mình',
    'Exploitability'=>'Exploitability',
    'RemediationLevel'=>'Remediation Cấp',
    'ReportConfidence'=>'Báo Cáo Tin',
    'EnvironmentalScoreMetrics'=>'Môi Trường Điểm Mình',
    'CollateralDamagePotential'=>'Hoại Tiềm Năng',
    'TargetDistribution'=>'Mục Tiêu Phân Phối',
    'ConfidentialityRequirement'=>'Việc Giữ Bí Mật Cần Thiết',
    'IntegrityRequirement'=>'Sự Chính Trực Cần Thiết',
    'AvailabilityRequirement'=>'Có Sẵn Cần Thiết',
    'UpdateDREADScore'=>'Cập nhật SỢ Điểm',
    'DamagePotential'=>'Thiệt Hại Tiềm Năng',
    'Reproducibility'=>'Reproducibility',
    'AffectedUsers'=>'Có Ảnh Hưởng Đến Người',
    'Discoverability'=>'Discoverability',
    'UpdateOWASPScore'=>'Cập nhật OWASP Điểm',
    'ThreatAgentFactors'=>'Đe Dọa Nhân Viên Những Yếu Tố',
    'SkillLevel'=>'Trình Độ',
    'Motive'=>'Động cơ',
    'Opportunity'=>'Cơ hội',
    'Size'=>'Cỡ',
    'VulnerabilityFactors'=>'Lổ Hổng Những Yếu Tố',
    'EaseOfDiscovery'=>'Thoải mái của Discovery',
    'EaseOfExploit'=>'Thoải mái của khai thác',
    'Awareness'=>'Nhận thức',
    'IntrusionDetection'=>'Vì Đã Xen Vào Phát Hiện',
    'TechnicalImpact'=>'Kỹ Thuật, Có Sự Va Chạm',
    'LossOfConfidentiality'=>'Mất việc giữ bí mật',
    'LossOfIntegrity'=>'Thất bại của sự chính trực,',
    'LossOfAvailability'=>'Mất có sẵn',
    'LossOfAccountability'=>'Mất là trách nhiệm',
    'BusinessImpact'=>'Việc Va Chạm',
    'FinancialDamage'=>'Thiệt Hại Tài Chính',
    'ReputationDamage'=>'Danh Tiếng Thiệt Hại',
    'NonCompliance'=>'Không Tuân Theo Thì',
    'PrivacyViolation'=>'Vi Phạm Riêng Tư',
    'UpdateCustomScore'=>'Cập Nhật Tự Chọn Điểm',
    'ManuallyEnteredValue'=>'Hãy Vô Giá Trị',
    'ScoreByClassic'=>'Ghi điểm bằng cách cổ Điển',
    'ScoreByCVSS'=>'Ghi điểm bằng CVSS',
    'ScoreByDREAD'=>'Ghi điểm bằng sự SỢ hãi',
    'ScoreByOWASP'=>'Ghi điểm bằng OWASP',
    'ScoreByCustom'=>'Ghi điểm bằng cách Riêng',
    'BaseVector'=>'Căn Cứ Toạ Độ',
    'TemporalVector'=>'Thời Toạ Độ',
    'EnvironmentalVector'=>'Môi Trường Toạ Độ',
    'SupportingDocumentation'=>'Hỗ Trợ Tài Liệu',
    'Import'=>'Nhập',
    'Export'=>'Xuất',
    'ActivateTheImportExportExtra'=>'Kích hoạt đầu Xuất Nhập cảng Thêm',
    'PrintableView'=>'Printable Xem',
    'GroupBy'=>'Nhóm Bởi',
    'IncludedColumns'=>'Trong Đó Bao Gồm Cột',
    'AllRisks'=>'Tất Cả Những Rủi Ro',
    'DynamicRiskReport'=>'Cầm Súng Chặt Vừa Phải Mạo Hiểm Báo Cáo',
    'ObsoleteReports'=>'Chấm Dứt Báo Cáo',
    'Project'=>'Dự án',
    'SortBy'=>'Sắp Xếp',
    'MonthSubmitted'=>'Tháng Gửi Đi',
    'AssetManagement'=>'"Tài Sản" Quản Lý',
    'AutomatedDiscovery'=>'Tự Động Discovery',
    'BatchImport'=>'Mẻ Nhập',
    'ManageAssets'=>'Quản Lý Tài Sản',
    'AssetValuation'=>'"Tài Sản" Valuation',
    'AllowAccessToAssetManagementMenu'=>'Cho phép Truy cập ""tài Sản " quản lý" Đơn',
    'AutomatedDiscoveryHelp'=>'Phát hiện sống địa chỉ IP trên DIỆP vấn vô tầm. Sống địa chỉ IP sẽ được thêm vào các "tài sản" danh sách. Được định dạng:',
    'IPRange'=>'DIỆP Tầm',
    'Search'=>'Tìm kiếm',
    'AddANewAsset'=>'Thêm "tài Sản"',
    'DeleteAnExistingAsset'=>'Xoá một Tập "tài Sản"',
    'AssetName'=>'"Tài Sản" Tên',
    'IPAddress'=>'Địa chỉ IP',
    'AssetWasAddedSuccessfully'=>'"Tài sản" vào thành công.',
    'AssetWasDeletedSuccessfully'=>'"Tài sản" đã xoá thành công.',
    'ThereWasAProblemAddingTheAsset'=>'Đó là một vấn đề thêm "tài sản".',
    'ThereWasAProblemDeletingTheAsset'=>'Đó là một vấn đề xoá "tài sản".',
    'ComingSoon'=>'Đến Ngay',
    'ExportRisks'=>'Xuất Hiểm',
    'ExportMitigations'=>'Xuất Mitigations',
    'ExportReviews'=>'Xuất Những Bài Phê Bình',
    'ExportCombined'=>'Xuất Kết Hợp Lại',
    'MitigatedBy'=>'Mitigated Bởi',
    'MitigationId'=>'Mitigation thẻ căn CƯỚC',
    'ReviewId'=>'Xem thẻ căn CƯỚC',
    'AffectedAssets'=>'Có Ảnh Hưởng Đến Tài Sản',
    'Activate'=>'Kích hoạt',
    'DeleteRisks'=>'Xoá Hiểm',
    'DeletedRisksCannotBeRecovered'=>'Xoá Hiểm Không Thể Lấy Lại',
    'RisksDeletedSuccessfully'=>'Nguy hiểm(s) Xoá Thành công',
    'ThereWasAProblemDeletingTheRisk'=>'Đó Là một vấn Đề Xoá Nguy hiểm(s)',
    'Activated'=>'Kích HOẠT',
    'IWantToReviewInsignificantRiskEvery'=>'Tôi muốn xem xét vô nghĩa liều mỗi',
    'Insignificant'=>'Vô nghĩa',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Tôi thấy RẤT CAO mạo hiểm mọi thứ còn tuyệt hơn',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Tôi xem CAO mạo hiểm được ít hơn ở trên, nhưng lớn hơn',
    'VeryHigh'=>'Rất Cao',
    'VeryHighRisk'=>'Rất Nguy Hiểm',
    'IWantToReviewVeryHighRiskEvery'=> 'Tôi muốn xem xét RẤT CAO liều mỗi',
    'AbleToReviewVeryHighRisks'=>'Có thể Xem qua Rất nhiều nguy Hiểm',
    'AbleToReviewInsignificantRisks'=>'Có thể kiểm tra vô nghĩa Hiểm',
    'TotalVeryHighRisks'=>'Tổng Rất Nguy Hiểm',
    'VeryHighRiskPercentage'=>'Rất Nguy Hiểm Phần Trăm',
    'AllTeams'=>'Tất Cả Các Đội',
    'FileUploadSettings'=>'Tập Tin Thiết Lập Quá Trình Tải Lên',
    'AllowedFileTypes'=>'Được Phép Kiểu Tập Tin',
    'AddNewFileTypeOf'=>'Thêm mới tập tin kiểu',
    'DeleteCurrentFileTypeOf'=>'Xoá hiện tập tin kiểu',
    'MaximumUploadFileSize'=>'Tối Đa Tải Lên Kích Cỡ Tập Tin',
    'Bytes'=>'Byte',
    'CheckAll'=>'Kiểm Tra Tất Cả',
    'CheckAllRiskMgmt'=>'Kiểm Tra Tất Cả Đi Quản Lý Rủi Ro',
    'CheckAllAssetMgmt'=>'Kiểm Tra Tất Cả Tài Sản Quản Lý',
    'CheckAllConfigure'=>'Kiểm Tra Tất Cả Cấu',
    'MitigationTeam'=>'Mitigation Đội',
    'ImportRisks'=>'Nhập Hiểm',
    'ImportAssets'=>'Nhập Tài Sản',
    'AssetValue'=>'Tài Sản Giá Trị',
    'Register'=>'Giấy đăng ký',
    'RegisterSimpleRisk'=>'Giấy Đăng Ký SimpleRisk',
    'RegistrationText'=>'Bởi registering SimpleRisk ngài sẽ được cấp của anh thông tin liên lạc, thế là cô có thể được cập nhật theo giờ thả tôi thông tin và quan trọng an ninh thông báo. Thông tin của anh sẽ không bao giờ được bán cho một nhóm ba. Được đăng ký các thể hiện cũng có khả năng là để hỗ trợ và nâng cấp với những ấn một nút.',
    'RegistrationInformation'=>'Đăng Ký Thông Tin',
    'Company'=>'Công ty',
    'JobTitle'=>'Tên Công Việc',
    'Phone'=>'Điện thoại',
    'UpgradeSimpleRisk'=>'Nâng Cấp SimpleRisk',
    'UpgradeInstructions'=>'Phần này dùng nâng cấp Thêm. Làm cho anh có những phiên bản mới nhất, hãy chọn "Cập nhật", hãy tái đăng ký trước, và nạp đạn trang này.',
    'NoUpgradeNeeded'=>'Không nâng cấp cần làm lúc này.',
    'BackupDatabase'=>'Hỗ trợ cơ sở dữ liệu',
    'UpgradeApplication'=>'Nâng cấp các Ứng dụng',
    'UpgradeDatabase'=>'Nâng cấp cơ sở dữ liệu',
    'CustomExtras'=>'Phong Tục Di Chúc',
    'CustomExtrasText'=>'Nó sẽ rất tuyệt nếu mọi thứ là miễn phí, đúng không? Hy vọng hạt nhân SimpleRisk sân ga có thể phục vụ của mọi người quản lý rủi ro cần. Nhưng, nếu anh tìm thấy bản thân mình vẫn còn muốn nhiều hơn chức năng, chúng tôi đã phát triển một phương "di chúc ..." rằng tôi sẽ làm điều đó.',
    'Upgrade'=>'Nâng cấp',
    'Install'=>'Cài',
    'Purchase'=>'Tôi mua',
    'PasswordPolicy'=>'Đặt Mật Khẩu ... ',
    'MinimumNumberOfCharacters'=>'Tối thiểu Số những nhân Vật',
    'RequireAlphaCharacter'=>'Cần Alpha Nhân Vật',
    'RequireUpperCaseCharacter'=>'Tôi Cần Lên Trên Trường Hợp Nhân Vật',
    'RequireLowerCaseCharacter'=>'Cần Phải Thấp Xuống Trường Hợp Nhân Vật',
    'RequireNumericCharacter'=>'Tôi Cần Số Nhân Vật',
    'RequireSpecialCharacter'=>'Yêu Cầu Nhân Vật Đặc Biệt',
    'Enabled'=>'Bật',
    'RiskPyramid'=>'Nguy Hiểm Pyramid',
    'RiskPyramidDescription'=>'Nguy hiểm kim tự tháp trên giúp để cho phân phối của sự nguy hiểm trong nhiều loại nguy cấp. Một đầu nặng pyramid có thể là một dấu hiệu rằng tổ chức của các ông đang làm mất quá nhiều rủi ro.',
    'RiskAdvice'=>'Nguy Hiểm Lời Khuyên',
    'AddDeleteAssets'=>'Thêm & Xoá Hết Tài Sản',
    'EditAssets'=>'Sửa Tài Sản',
    'AutomaticAssetValuation'=>'Tự Động Sản Valuation',
    'ManualAssetValuation'=>'Sách Hướng Dẫn Sản Valuation',
    'MinimumValue'=>'Tựa',
    'MaximumValue'=>'Tối Đa Giá Trị',
    'ValueRange'=>'Giá Trị Tầm',
    'DefaultAssetValuation'=>'Mặc "Tài Sản" Valuation',
    'Default'=>'Mặc định',
    'RisksAndAssets'=>'Sự nguy hiểm và tài Sản',
    'Report'=>'Báo cáo',
    'RisksByAsset'=>'Nguy hiểm như vừa rồi "tài Sản" bởi',
    'AssetsByRisk'=>'Tài bằng cách mạo hiểm',
    'MaximumQuantitativeLoss'=>'Tối Đa Quantitative Mất',
    'MitigationOwner'=>'Mitigation Chủ',
    'MitigationCost'=>'Mitigation Giá',
    'RiskColumns'=>'Nguy Hiểm Cột',
    'MitigationColumns'=>'Mitigation Cột',
    'ReviewColumns'=>'Đọc Cột',
    'ChangeStatus'=>'Thay Đổi Tình Trạng',
    'SetRiskStatusTo'=>'Đặt Mạo Hiểm Để Tình Trạng',
    'AddNewStatusNamed'=>'Thêm mới trạng thái tên',
    'DeleteStatusNamed'=>'Xoá tên tình trạng',
    'DefaultCurrencySymbol'=>'Mặc Định Dùng Loại "Tiền" Biểu Tượng',
    'DefaultValues'=>'Mặc Định Giá Trị',
    'RiskSource'=>'Nguồn Nguy Hiểm',
    'AddNewSourceNamed'=>'Thêm mới nguồn tên',
    'DeleteSourceNamed'=>'Xoá tên là nguồn gốc',
    'CheckAllAssessments'=>'Kiểm Tra Tất Cả Assessments',
    'AllowAccessToAssessmentsMenu'=>'Cho phép Truy cập "Assessments" Đơn',
    'Assessments'=>'Assessments',
    'AvailableAssessments'=>'Sẵn Sàng Assessments',
    'PendingRisks'=>'Trong Lúc Chờ Có Rủi Ro',
    'CreateAssessment'=>'Tạo Ra Nhận Định',
    'EditAssessment'=>'Sửa Đánh Giá',
    'Overview'=>'Tổng thể',
    'OpenVsClosed'=>'Mở đấu với Đóng cửa',
    'MitigatedVsUnmitigated'=>'Mitigated đấu với Unmitigated',
    'ReviewedVsUnreviewed'=>'Xem xét đấu với Unreviewed',
    'OpenedRisks'=>'Mở Hiểm',
    'MailSettings'=>'Thư Thiết Lập',
    'TransportAgent'=>'Đặc Vụ Vận Chuyển',
    'FromName'=>'Từ Tên',
    'FromEmail'=>'Từ Email',
    'ReplyToName'=>'ReplyTo Tên',
    'ReplyToEmail'=>'ReplyTo Email',
    'Host'=>'Máy',
    'SMTPAuthentication'=>'SMTP xác thực',
    'Encryption'=>'Mã hóa',
    'Port'=>'Cổng',
    'Next'=>'Tiếp theo',
    'NewAssessmentQuestion'=>'Mới Nhận Định Hỏi',
    'Question'=>'Câu hỏi',
    'RiskScore'=>'Nguy Hiểm Điểm',
    'SubmitRisk'=>'Chấp Nhận Liều Lĩnh',
    'Answer'=>'Trả lời',
    'AddQuestion'=>'Thêm Câu Hỏi',
    'SaveAssessment'=>'Cứu Được Đánh Giá',
    'SendAssessment'=>'Gửi Đánh Giá',
    'DeleteAssessment'=>'Xoá Đánh Giá',
    'AssessmentName'=>'Đánh Giá Tên',
    'SendTo'=>'Gửi Đến ... ',
    'ActiveAssessments'=>'Hoạt Động Assessments',
    'SentTo'=>'Gửi Đến',
    'From'=>'Từ',
    'Key'=>'Chìa khóa',
    'GoToSSOLoginPage'=>'Tới SSO Trang Đăng Nhập',
    'APIKey'=>'API Chìa khóa',
    'GenerateAPIKey'=>'phát ra API Chìa khóa',
    'RotateAPIKey'=>'Quay API Chìa khóa',
    'InvalidateAPIKey'=>'làm mất hiệu lực API Chìa khóa',
    'Deactivate'=>'tắt',
    'ImportExportExtra'=>'Import-Export Extra',
    'SaveDetails'=>'Lưu Chi tiết',
    'ClearForm'=>'Hình thức rõ ràng',
    'SaveMitigation'=>'Lưu Giảm nhẹ',
    'Cancel'=>'hủy bỏ',
    'SubmitReview'=>'Gửi nhận xét',
    'UnassignedRisks'=>'Rủi ro Unassigned'
    'DisableRegistrationNotice'=>'Thông báo đăng ký Disable',
    ''=>'',
);

?>
